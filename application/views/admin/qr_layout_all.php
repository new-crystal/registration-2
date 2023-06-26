			<!-- Main content -->
			<div id="nametag_wrapper">
                <div class="edit_wrapper">
                    <button id="btnPrint" type="button" class="btn btn-primary" style="margin-left:20px;">Print<?php $num_row ?></button>
                </div>

				<!-- Content area -->
				<div class="content" id="nametag">
                        <div id="printThis">
                        <?php
                        $num_int = 1;
                        foreach($users as $item){
                            $lang = preg_match("/[\xE0-\xFF][\x80-\xFF][\x80-\xFF]/", $item['nick_name']);
                            echo '<div class="a4_area">';
                                echo '<div class="bg_area">';
                                echo '<div style ="display: none;">'. $num_int .'</div>';
                                echo '<div class="txt_con">';
                                        if($item['nt_info'] != ''){
                                            echo '<div class="org" id="nt_info">' . $item['nt_info'] . '</div>';
                                        }
                                        if($lang==0){
                                            echo '<div class="nick_name lang_en" id="nick_name">' . $item['nick_name'] . '</div>';
                                        }else{
                                            echo '<div class="nick_name" id="nick_name">' . $item['nick_name'] . '</div>';
                                        }
                                        echo '<div class="org draggable">' . $item['org_nametag'] . '</div>';
                                        if($item['qr_chk']=='Y'){
                                            echo '<div id="qrcode" class="draggable"><img src="/assets/images/QR/qrcode_' . $item['phone'] . '.png"></div>';
                                        }
                                        echo '<div class="receipt receipt_name">' . $item['nick_name'] . '</div>';
                                        echo '<div class="receipt receipt_price">'. number_format($item['fee'])  .'</div>';
                                    echo '</div>';
                                echo '</div>';
                            echo '</div>';
                            $num_int = $num_int + 1;
                            }
                        ?>
                        </div>
				</div>
				<!-- /content area -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->
	<style>
        body{
            background-color: #fff;
        }
    </style>
	<script>
        document.getElementById("btnPrint").onclick = function () {
            printElement(document.getElementById("printThis"));
        }

        function printElement(elem) {
            var domClone = elem.cloneNode(true);

            var $printSection = document.getElementById("printSection");

            if (!$printSection) {
                var $printSection = document.createElement("div");
                $printSection.id = "printSection";
                document.body.appendChild($printSection);
            }

            $printSection.innerHTML = "";
            $printSection.appendChild(domClone);
            window.print();
        }
    </script>
</body>
