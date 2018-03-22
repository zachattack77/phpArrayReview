+<?php
+/**
+ * Created by PhpStorm.
+ * User: zach
+ * Date: 2/22/2018
+ */
+
 function printAnimals($animals)
 {
     +    sort($animals);

     -}
+    for($i = 0; $i < count($animals); $i++)
    +    {
    +        echo $animals[$i] . " ";
+    }
+}
+printAnimals($animals);