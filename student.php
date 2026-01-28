<form method="post">
    Name <input type="text" name="name">
    <button type="submit" name="save">Save</button>
</form>

<?php
if (isset($_POST['save'])) {

    if (file_exists("example1.xml")) {
        $xml = simplexml_load_file("example1.xml");
    } else {
        $xml = new SimpleXMLElement("<students></students>");
    }

    $student = $xml->addChild("student");
    $student->addChild("name", $_POST['name']);

    $xml->asXML("example1.xml");
}
?>