<script src="https://cdn.tailwindcss.com"></script>

<?php echo form_open('/admin/memo?n=' . $item['id'], 'id="memoForm" name="memoForm"') ?>
<div class="flex flex-col items-center justify-center w-full h-full">
    <input id="memo" name="memo" class="w-10/12 h-4/6 border p-5" value="<?php echo isset($item['memo']) ? $item['memo'] : ''; ?>">
    </input>
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

    closeButton.addEventListener("click", () => {
        window.close()
    })

    form.addEventListener("submit", (event) => {
        event.preventDefault();
        if (memo.value !== "") {
            saveMemo();
        } else {
            alert("메모를 입력해주세요")
        }

    });

    async function saveMemo() {
        const memoValue = memo.value;
        const url = form.action;
        const formData = new FormData(form);
        formData.set('memo', memoValue);

        try {
            const response = await fetch(url, {
                method: 'POST',
                body: formData
            });

            if (response.ok) {
                // 메모 저장 성공
                console.log("메모 저장 성공");
                window.close();
            } else {
                // 메모 저장 실패
                console.log("메모 저장 실패");
            }
        } catch (error) {
            console.log("메모 저장 중 오류 발생:", error);
        }
    }
</script>