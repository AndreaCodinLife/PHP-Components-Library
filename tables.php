<?php

//Table function with arrays as parameters to make it more dynamic and reusable
function createTable($array_colomns, $array_rows, $resultsql)
{
?>
    <div class="ml-2.5 mr-2.5 overflow-x-auto relative shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <tr class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <?php
                foreach ($array_colomns as $colomn) {
                    echo "<td scope=\"col\" class=\"py-3 px-6\">$colomn</td>";
                }
                ?>
            </tr>
            <?php
            $i = 0;
            while ($row = mysqli_fetch_array($resultsql)) {
            ?>
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <?php
                    foreach ($array_rows as $rowtext) { ?>
                        <td class="py-4 px-6"><?php
                                                //if rowtext starts with / and is not an array then echo the value of the row
                                                if (!is_array($rowtext) && substr($rowtext, 0, 1) == "/") {
                                                    echo $row[substr($rowtext, 1)];
                                                } else {
                                                    //if $rowtext is an array that has a first value starting with button then echo the function with the parameters of the array
                                                    if (is_array($rowtext)) {
                                                        if (substr($rowtext[0], 0, 6) == "button") {
                                                            $function = $rowtext[0];
                                                            //only use the parameters of the array if there are any
                                                            if (count($rowtext) > 1) {
                                                                $parameters = array_slice($rowtext, 1); //get all parameters except the first one
                                                                //if a parameter's value ends with ? then add the rest of the array to the parameter value, if in the rest of the array there is a value with = insude then add all the text before the = to the parameter value and replace the value after the = with the value of the row
                                                                //for example if the array is ["buttonEdit","Modifier","page.php?","id=row[id]"] then the parameter will be "page.php?id=< the actual value of the row[id] >"
                                                                foreach ($parameters as $key => $parameter) {
                                                                    if (substr($parameter, -1) == "?") {
                                                                        //add a ? at the end of the parameter value
                                                                        $parameters[$key] = substr($parameter, 0, -1) . implode("", array_slice($parameters, $key + 1));
                                                                        unset($parameters[$key + 1]);
                                                                        if (strpos($parameters[$key], "=") !== false) {
                                                                            $rurl = explode("=", $parameters[$key]); // exemple: ["page.php?","id=row[id]"] -> ["page.php?","id"]
                                                                            // find the row['<something>'] and add it to a variable to replace the value in the parameter, for example if the parameter is ["page.php?","id=row[id]"] the result will be "page.php?id=<value of row['id']"
                                                                            $rurl[1] = substr($rurl[1], 4, -1); //remove the "row[" and "]"
                                                                            //remove the ''
                                                                            $rurl[1] = str_replace("'", "", $rurl[1]);
                                                                            $t = strval($rurl[1]);
                                                                            $rurl[1] = $row[$t]; // exemple: ["page.php?","id"] -> ["page.php?","<value of row['id']>"]
                                                                            $parameters[$key] = implode("=", $rurl); // exemple: ["page.php?","id"] -> "page.php?id"

                                                                        }
                                                                    }
                                                                }
                                                                $function(...$parameters);
                                                            } else {
                                                                $function();
                                                            }
                                                        }
                                                    } else {
                                                        echo $rowtext;
                                                    }
                                                } ?></td>
                    <?php
                    }
                    ?>
                </tr>
            <?php
                $i++;
            }
            ?>
        </table>
    </div>
<?php
} ?>
