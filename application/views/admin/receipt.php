<style>
p {
    margin: 5px
}

.name {
    position: absolute;
    top: 46px;
    left: 100px;
}
</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.0.272/jspdf.debug.js"></script>
<div>
    <img src="../../../assets/images/receipt.jpg" />
    <div class="name">
        <p><?php echo $users['nick_name']; ?></p>
        <p><?php echo $users['fee']; ?></p>
    </div>
    <div class="btn_wrap">
        <button class="save_btn" onclick="CreatePDFfromHTML()">Save</button>
    </div>
</div>

<script language="javascript">
function CreatePDFfromHTML() {
    const buttonBox = document.querySelector(".btn_wrap");
    const button = document.querySelector(".save_btn");

    buttonBox.removeChild(button)
    let doc = new jsPDF('p', 'pt', 'a4');

    doc.addHTML(document.body, function() {
        doc.save('receipt.pdf');
    });

    buttonBox.appendChild(button)
}
</script>