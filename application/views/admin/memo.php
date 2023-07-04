<script src="https://cdn.tailwindcss.com"></script>


<?php echo form_open('/admin/memo?n=' . $item['phone'], 'id="memoForm" name="memoForm"') ?>
<div class="flex flex-col items-center justify-center w-full h-full">
    <textarea id="memo" name="memo" class="w-10/12 h-4/6 border p-5">
    <?php echo isset($item['memo']) ? $item['memo'] : ''; ?>
    </textarea>
    <div class="flex items-center justify-center w-full mt-5">
        <button type="submit" id="save" class="h-8 w-28 bg-pink-600 text-white mx-5">Save</button>
        <button id="close" type="button" class="h-8 w-28 border border-pink-600 text-pink-600">Close</button>
    </div>
</div>
</form>
<script>
const closeButton = document.querySelector("#close")
const saveButton = document.querySelector("#save")
const memo = document.querySelector("#memo")
const form = document.querySelector("#memoForm")

// closeButton.addEventListener("click", () => {
//     window.close();
// })

// saveButton.addEventListener("click", () => {
//     saveMemo()
// })

form.addEventListener("submit", (event) => {
    event.preventDefault();
    if (memo.value !== "") {
        saveMemo();
    } else {
        alert("메모를 입력해주세요")
    }
    // window.close();
});

function saveMemo() {
    form.submit();
}
</script>