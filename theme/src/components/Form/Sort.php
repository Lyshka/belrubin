<?php
$optionArr = [
    [
        "title" => "Умолчанию",
        "value" => "",
    ],
    [
        "title" => "Цене ↑",
        "value" => "price_desc",
    ],
    [
        "title" => "Цене ↓",
        "value" => "price",
    ],
]
?>

<form id="sortForm">
    <label>
        <span>Акции</span>

        <input type="checkbox" name="isStock" <?= isset($_GET["isStock"]) && !empty($_GET["isStock"]) ? "checked" : ""; ?>>
    </label>

    <label>
        <span>Сортировать по:</span>

        <select name="orderby">
            <?php
            foreach ($optionArr as $option) :
                $title = $option["title"];
                $value = $option["value"];
            ?>
                <option value="<?= $value; ?>" <?= isset($_GET["orderby"]) && $_GET["orderby"] === $value ? "selected" : ""; ?>>
                    <?= $title; ?>
                </option>
            <?php endforeach; ?>
        </select>
    </label>
</form>