+<?php
+/**
+ * Created by PhpStorm.
+ * User: zach
+ * Date: 2/22/2018
+ */
+
+function addAnimals($string, $animals)
+{
    +    echo nl2br ("\n adding $string ... \n");
+    $string = strtolower($string);
+    if(!(in_array($string, $animals)))
        +    {
        +        array_push($animals, $string);
        +    }
+    printAnimals($animals);
+}
+
+printAnimals($animals);
+addAnimals("goat", $animals);
+addAnimals("Boa", $animals);ntAnimals($animals);