<?php
//this file contains the functions to create buttons
// Path: assets/intern_css_components/buttons.php

//Delete Button
function buttonDelete($value, $onclick, $padding = False, $message = "")
{
    if ($padding == True) {
?>
        <br><br>
    <?php
    } ?>
    <?php if ($message != "") { ?>
    <?php
        echo "
        <div class='flex justify-center m-5'>
            <button id='deleteButton' data-modal-toggle='popup-modal-$onclick' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out' type='button'>
                <i class='bi bi-trash-fill'></i>&nbsp;&nbsp;$value
            </button>
        </div>

        <!-- Main modal -->
        <div id='popup-modal-$onclick' tabindex='-1' aria-hidden='true' class='hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full'>
            <div class='relative p-4 w-full max-w-md h-full md:h-auto'>
                <!-- Modal content -->
                <div class='relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5'>
                <svg class=\"text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\"></path></svg>
                        <p class='mb-4 text-gray-500 dark:text-gray-300'>$message</p>
                        <div class='flex justify-center items-center space-x-4'>
                            <button data-modal-toggle='popup-modal-$onclick' type='button' class='py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600'>
                                Non, annuler
                            </button>
                            <button type='submit' class='py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900' onclick='location.href = \"$onclick\"'>
                                Oui, supprimer
                            </button>
                        </div>
                </div>
            </div>
        </div>";
    } else { ?>
        <?php
        echo "<div class='flex justify-center m-5'>
<button id='deleteButton' data-modal-toggle='popup-modal-$onclick' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out' type='button'>
    <i class='bi bi-trash-fill'></i>&nbsp;&nbsp;$value</button>
</div>

<!-- Main modal -->
<div id='popup-modal-$onclick' aria-hidden='true' class='hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full' style='position:unset;'>
<div class='relative p-4 w-full max-w-md h-full md:h-auto'>
    <!-- Modal content -->
    <div class='relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5'>
        <svg class=\"text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\"></path></svg>
            <p class='mb-4 text-gray-500 dark:text-gray-300'>Vous êtes sur le point de supprimer définitivement cet élément. Êtes-vous sûr de vouloir continuer ?</p>
            <div class='flex justify-center items-center space-x-4'>
                <button data-modal-toggle='popup-modal-$onclick' type='button' class='py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600'>
                    Non, annuler
                </button>
                <button type='submit' class='py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900' onclick='location.href = \"$onclick\"'>
                    Oui, supprimer
                </button>
            </div>
        </div>
    </div>
</div>";
        ?>

    <?php } ?>
    <?php
    if ($padding == True) {
    ?>
        <br><br>
<?php
    }
} ?>

<?php
//Delete Button Table
function tbuttonDelete($value, $onclick, $padding = False, $message = "")
{
    if ($padding == True) {
?>
        <br><br>
    <?php
    } ?>
    <?php if ($message != "") { ?>
    <?php
        return "<div class='flex justify-center m-5'>
            <button id='deleteButton' data-modal-toggle='popup-modal-$onclick' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out' type='button'>
                <i class='bi bi-trash-fill'></i>&nbsp;&nbsp;$value
            </button>
        </div>

        <!-- Main modal -->
        <div id='popup-modal-$onclick' tabindex='-1' aria-hidden='true' class='hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full'>
            <div class='relative p-4 w-full max-w-md h-full md:h-auto'>
                <!-- Modal content -->
                <div class='relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5'>
                <svg class=\"text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\"></path></svg>
                        <p class='mb-4 text-gray-500 dark:text-gray-300'>$message</p>
                        <div class='flex justify-center items-center space-x-4'>
                            <button data-modal-toggle='popup-modal-$onclick' type='button' class='py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600'>
                                Non, annuler
                            </button>
                            <button type='submit' class='py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900' onclick='location.href = \"$onclick\"'>
                                Oui, supprimer
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>";
    } else { ?>
        <?php
        return "<div class='flex justify-center m-5'>
<button id='deleteButton' data-modal-toggle='popup-modal-$onclick' class='inline-block px-6 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-red-700 hover:shadow-lg focus:bg-red-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-red-800 active:shadow-lg transition duration-150 ease-in-out' type='button'>
    <i class='bi bi-trash-fill'></i>&nbsp;&nbsp;$value
</button>
</div>

<!-- Main modal -->
<div id='popup-modal-$onclick' tabindex='-1' aria-hidden='true' class='hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-modal md:h-full'>
<div class='relative p-4 w-full max-w-md h-full md:h-auto'>
    <!-- Modal content -->
    <div class='relative p-4 text-center bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5'>
        <svg class=\"text-gray-400 dark:text-gray-500 w-11 h-11 mb-3.5 mx-auto\" aria-hidden=\"true\" fill=\"currentColor\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"><path fill-rule=\"evenodd\" d=\"M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z\" clip-rule=\"evenodd\"></path></svg>
            <p class='mb-4 text-gray-500 dark:text-gray-300'>Vous êtes sur le point de supprimer définitivement cet élément. Êtes-vous sûr de vouloir continuer ?</p>
            <div class='flex justify-center items-center space-x-4'>
                <button data-modal-toggle='popup-modal-$onclick' type='button' class='py-2 px-3 text-sm font-medium text-gray-500 bg-white rounded-lg border border-gray-200 hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600'>
                    Non, annuler
                </button>
                <button type='submit' class='py-2 px-3 text-sm font-medium text-center text-white bg-red-600 rounded-lg hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-900' onclick='location.href = \"$onclick\"'>
                    Oui, supprimer
                </button>
            </div>
        </div>
    </div>
</div>
</div>";
        ?>

    <?php } ?>
    <?php
    if ($padding == True) {
    ?>
        <br><br>
<?php
    }
} ?>
<?php
//Edit Button
function buttonEdit($value, $onclick, $padding = False)
{
    if ($padding == True) {
        $pa = '<br><br>';
    } else {
        $pa = '';
    }
    //make all the code above into a return
    echo "$pa<button class=\"inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out\" onclick=\"location.href = '" . $onclick  . "'\">
            <i class=\"bi bi-pencil-fill\"></i>&nbsp;&nbsp;" . $value . "
        </button>
        $pa";
} ?>
<?php
//Edit Button
function tbuttonEdit($value, $onclick, $padding = False)
{
    if ($padding == True) {
        $pa = '<br><br>';
    } else {
        $pa = '';
    }
    //make all the code above into a return
    return "$pa<button class=\"inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out\" onclick=\"location.href = '" . $onclick  . "'\">
            <i class=\"bi bi-pencil-fill\"></i>&nbsp;&nbsp;" . $value . "
        </button>
        $pa";
} ?>

<?php
//Global Button
function buttonGlobal($value, $onclick, $padding = False, $color = "blue", $icon = "bi bi-pencil-fill")
{
    if ($padding == True) { ?>
        <br><br>
    <?php } ?>
    <button class="inline-block px-6 py-2.5 bg-<?php echo $color; ?>-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-<?php echo $color; ?>-700 hover:shadow-lg focus:bg-<?php echo $color; ?>-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-<?php echo $color; ?>-800 active:shadow-lg transition duration-150 ease-in-out" onclick="location.href = '<?php echo $onclick; ?>'">
        <i class="<?php echo $icon; ?>"></i>&nbsp;&nbsp;<?php echo $value ?>
    </button>
    <?php if ($padding == True) { ?>
        <br><br>
<?php }
} ?>

<?php
//Back Button
function buttonBack($value, $onclick, $padding = False)
{
    if ($padding == True) { ?>
        <br><br>
    <?php } ?>
    <button class="inline-block px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out" onclick="location.href = '<?php echo $onclick; ?>'">
        <i class="bi bi-arrow-left"></i>&nbsp;&nbsp;<?php echo $value ?>
    </button>
    <?php if ($padding == True) { ?>
        <br><br>
<?php }
} ?>

<?php
//Add Button
function buttonAdd($value, $onclick, $padding = False)
{
    if ($padding == True) { ?>
        <br><br>
    <?php } ?>
    <button class="inline-block px-6 py-2.5 bg-green-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-green-700 hover:shadow-lg focus:bg-green-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-800 active:shadow-lg transition duration-150 ease-in-out" onclick="location.href = '<?php echo $onclick; ?>'">
        <i class="bi bi-plus-circle"></i>&nbsp;&nbsp;<?php echo $value ?>
    </button>
    <?php if ($padding == True) { ?>
        <br><br>
<?php }
} ?>

<?php
//Help Button
function buttonHelp($onclick, $padding = False)
{
    if ($padding == True) { ?>
        <br><br>
    <?php } ?>
    <a href="<?php echo $onclick; ?>" target="_blank">
        <i class="bi bi-question-circle"></i>
    </a>
    <?php if ($padding == True) { ?>
        <br><br>
<?php }
} ?>

<?php
//View Button
function buttonView($value, $onclick, $padding = False)
{
    if ($padding == True) { ?>
        <br><br>
    <?php } ?>
    <button class="inline-block px-6 py-2.5 bg-purple-600 text-white font-medium text-xs leading-tight uppercase rounded-full shadow-md hover:bg-purple-700 hover:shadow-lg focus:bg-purple-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-purple-800 active:shadow-lg transition duration-150 ease-in-out" onclick="location.href = '<?php echo $onclick; ?>'">
        <i class="bi bi-eye"></i>&nbsp;&nbsp;<?php echo $value ?>
    </button>
    <?php if ($padding == True) { ?>
        <br><br>
<?php }
} ?>
