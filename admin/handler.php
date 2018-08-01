<?php
require_once 'Database.php';

    if ("POST" == $_SERVER['REQUEST_METHOD'] && isset($_POST['add'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'league' => $_POST['League'],
            'matches' => $_POST['match'],
            'tip1' => $_POST['tip1'],
            'firstpercentage' => $_POST['firstpercent'],
            'tip2' => $_POST['tip2'],
            'secondpercentage' => $_POST['secondpercent'],
            'matchdate' => $_POST['matchdate'],
            'matchtime' => $_POST['time'],
        ];
        if (storeGames($data)) {
            echo 'Game save Successfully';
        } else {
            echo 'Game failed to save, try again';
        }
    }

    if ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['update'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        $data = [
            'league' => $_POST['league'],
            'matches' => $_POST['match'],
            'tip1' => $_POST['tip1'],
            'firstpercentage' => $_POST['firstpercent'],
            'tip2' => $_POST['tip2'],
            'secondpercentage' => $_POST['secondpercent'],
            'matchdate' => $_POST['date'],
            'matchtime' => $_POST['time'],
            'id' => $_POST['id'],
        ];

        // print_r($data);
        if (updateGame($data)) {
            echo 'Game update Successfully';
        } else {
            echo 'Game failed to update, try again';
        }


    }

    if ('POST' == $_SERVER['REQUEST_METHOD'] && isset($_POST['del'])) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if (deleteGame($_POST['id'])) {
            echo 'Deleted Successfully';
        } else {
            echo 'Operation failed, try again';
        }
    }

    if ('POST' == $_SERVER['REQUEST_METHOD'] && $_POST['status']) {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if ($_POST['status'] == 'won') {
            if (changeStatus(1, $_POST['id'])) {
                echo "Updated successfully";
            } else {
                echo "Operation Failed, Try again later";
            }
        } else {
            if (changeStatus(0, $_POST['id'])) {
                echo "Updated successfully";
            } else {
                echo "Operation Failed, Try again later";
            }
        }
    }

    function changeStatus($status, $id)
    {
        $db = Database::getInstance();
        $query = 'UPDATE games SET status = :status WHERE id = :id';
        $db->query($query);
        $db->bind(':status', $status);
        $db->bind(':id', $id);
        if ($db->execute()) {
            return true;
        }
        return false;
    }

    function storeGames(array $data)
    {
        $db = Database::getInstance();
        $query = 'INSERT INTO games (league, matches, tip1, firstpercentage, tip2, secondpercentage, matchdate, matchtime) VALUES
        (:league, :matches, :tip1, :firstpercentage, :tip2, :secondpercentage, :matchdate, :matchtime)';

        $db->query($query);
        $db->bind(':league', $data['league']);
        $db->bind(':matches', $data['matches']);
        $db->bind(':tip1', $data['tip1']);
        $db->bind(':firstpercentage', $data['firstpercentage']);
        $db->bind(':tip2', $data['tip2']);
        $db->bind(':secondpercentage', $data['secondpercentage']);
        $db->bind(':matchdate', $data['matchdate']);
        $db->bind(':matchtime', $data['matchtime']);
        if ($db->execute()) {
            return true;
        }
        return false;
    }

    function deleteGame($id)
    {
        $db = Database::getInstance();
        $query = 'DELETE FROM games WHERE id = :id';
        $db->query($query);
        $db->bind(':id', $id);
        if ($db->execute()) {
            return true;
        }
        return false;
    }

    function updateGame(array $data) {
        $db = Database::getInstance();
        $query = 'UPDATE games SET league = :league, matches = :match, matchtime = :time, matchdate = :date, tip1 = :tip1, firstpercentage = :firstpercent, tip2 = :tip2, secondpercentage = :secondpercent WHERE id = :id';
        $db->query($query);
        $db->bind(':league', $data['league']);
        $db->bind(':match', $data['matches']);
        $db->bind(':time', $data['matchtime']);
        $db->bind(':date', $data['matchdate']);
        $db->bind(':tip1', $data['tip1']);
        $db->bind(':firstpercent', $data['firstpercentage']);
        $db->bind(':tip2', $data['tip2']);
        $db->bind(':secondpercent', $data['secondpercentage']);
        $db->bind(':id', $data['id']);
        if ($db->execute()) {
            return true;
        }
        return false;

    }
