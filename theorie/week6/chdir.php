<?php

//chdir
// Get current directory
echo getcwd() . "<br>";

// Change directory
chdir("images");

// Get current directory
echo getcwd();

//chroot (does not work)
// Change root directory
// chroot("/theorie/week6");

// Get current directory
// echo getcwd();

//readdir
$dir = "/week6/";

// Open a directory, and read its contents
if (is_dir($dir)){
  if ($dh = opendir($dir)){
    while (($file = readdir($dh)) !== false){
      echo "filename:" . $file . "<br>";
    }
    closedir($dh);
  }
}

//rmdir
$path = "remove";
if(!is_dir('remove')) {
    mkdir('remove');
}
if(!rmdir($path)){
	echo ("Could not remove $path");
}

//basename
echo "<br>";
$path = "/week6/chdir.php";

//Show filename with file extension
echo basename($path) ."<br>";

//Show filename without file extension
echo basename($path,".php");

//chmod
// Read and write for owner, read for everybody else
chmod("test.txt",0644);

// Everything for owner, read and execute for everybody else
chmod("test.txt",0755);

// Everything for owner, read for owner's group
chmod("test.txt",0740);

// Read and write for owner, nothing for everybody else
chmod("test.txt",0600);

//file_exists
if(file_exists('test.txt')){
	echo "file does exist";
}
else{
	echo "file not found";
}

//fputs
echo "<br>";
$file = fopen("test.txt","w");
echo fputs($file,"Hello World. Testing!");
fclose($file);

//rename
rename('toRename.txt','renamed.txt');

//unlink
$file = "renamed.txt";
if(!unlink($file)){
	echo("Error deleting $file");
}
else{
	echo ("Deleted $file");
}

//is_dir
echo "<br>";
if(is_dir('images')){
	echo 'images is directory';
}
else echo 'false';


//is_executable
echo "<br>";
if(is_dir('images')){
	echo 'true';
}
else echo 'false';


//is_file
echo "<br>";
if(is_dir('images')){
	echo 'true';
}
else echo 'false';


//is_link
echo "<br>";
if(is_dir('test.txt')){
	echo 'true';
}
else echo 'false';

//is_readable
echo "<br>";
if(is_dir('test.txt')){
	echo 'true';
}
else echo 'false';


//is_writable
echo "<br>";
if(is_dir('test.txt')){
	echo 'true';
}
else echo 'false';


//is_uploaded_file
echo "<br>";
if(is_dir('test.txt')){
	echo 'true';
}
else echo 'false';

//finfo_open


//finfo_file
?>