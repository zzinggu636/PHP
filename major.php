<?PHP
$dataset = file("major.txt");

    print "<hr>";
    foreach ($dataset as $data) {
        print " ".$data."<br>";
    }
    print "<hr>";
    foreach($dataset as $data)
    {
        $str = explode(" ", $data);
        print "Name : ".$str[0].", Major : ".$str[1]."<br>";
    }
?>