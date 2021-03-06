<?php
defined('BASEPATH') OR exit('No direct script access allowed');
echo link_tag('assets/css/board.css');
?>
<script type="text/javascript" src="<?php echo base_url('assets/js/jquery.js'); ?>" ></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/dice.js'); ?>"></script>
<script type="text/javascript" src="<?php echo base_url('assets/js/construir.js'); ?>"></script>
<button type="button" id="roll" name="roll">ROLL DICE !!!</button>
<input type="text" name="resultado" readonly id="resultado" value="">
<body onselectstart="return false">
	<div class="cartas">
		<input type="text" name="madeira" id="inputmadeira" readonly value="0">
		<div id="cartamadeira"></div>
		<input type="text" name="ovelha" id="inputovelha" readonly value="0">
		<div id="cartaovelha"></div>
		<input type="text" name="pedra" id="inputpedra" readonly value="0">
		<div id="cartapedra"></div>
		<input type="text" name="tijolo" id="inputtijolo" readonly value="0">
		<div id="cartatijolo"></div>
		<input type="text" name="trigo" id="inputtrigo" readonly value="0">
		<div id="cartatrigo"></div>
	</div>
	<div class="board">
		<center>
			<div class="moldura">
				<div class="materiais">
					<div id="um">
						<div class="<?php echo $materiaPrima[0];?>" style="left:4px;top:2.5px;">
							<div id="<?php echo $numero[0]?>" class="numeros <?php echo $numero[0]?>">
								<input type="hidden" value="<?php echo $numero[0].'/'.$materiaPrima[0] ?>">
								<?php echo $numero[0] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[1];?>" style="right:2px;top:2.5px;">
							<div id="<?php echo $numero[1]?>" class="numeros <?php echo $numero[1]?>">
								<input type="hidden" value="<?php echo $numero[1].'/'.$materiaPrima[1] ?>">
								<?php echo $numero[1] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[2];?>" style="right:7px;top:4px;">
							<div id="<?php echo $numero[2]?>" class="numeros <?php echo $numero[2]?>">
								<input type="hidden" value="<?php echo $numero[2].'/'.$materiaPrima[2] ?>">
								<?php echo $numero[2] ?>
							</div>
						</div><br>
					</div>

					<div id="dois">
						<div class="<?php echo $materiaPrima[3];?>" style="bottom:36px;left:6px;">
							<div id="<?php echo $numero[3]?>" class="numeros <?php echo $numero[3]?>">
								<input type="hidden" value="<?php echo $numero[3].'/'.$materiaPrima[3] ?>">
								<?php echo $numero[3] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[4];?>" style="bottom:36px;">
							<div id="<?php echo $numero[4]?>" class="numeros <?php echo $numero[4]?>">
								<input type="hidden" value="<?php echo $numero[4].'/'.$materiaPrima[4] ?>">
								<?php echo $numero[4] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[5];?>" style="bottom:36px;right:5px;">
							<div id="<?php echo $numero[5]?>" class="numeros <?php echo $numero[5]?>">
								<input type="hidden" value="<?php echo $numero[5].'/'.$materiaPrima[5] ?>">
								<?php echo $numero[5] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[6];?>" style="bottom:36px;right:11px;">
							<div id="<?php echo $numero[6]?>" class="numeros <?php echo $numero[6]?>">
								<input type="hidden" value="<?php echo $numero[6].'/'.$materiaPrima[6] ?>">
								<?php echo $numero[6] ?>
							</div>
						</div><br>
					</div>

					<div id="tres">
						<div class="<?php echo $materiaPrima[7];?>" style="bottom:75px;left:11px;">
							<div id="<?php echo $numero[7]?>" class="numeros <?php echo $numero[7]?>">
								<input type="hidden" value="<?php echo $numero[7].'/'.$materiaPrima[7] ?>">
								<?php echo $numero[7] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[8];?>" style="bottom:75px;left:5px;">
							<div id="<?php echo $numero[8]?>" class="numeros <?php echo $numero[8]?>">
								<input type="hidden" value="<?php echo $numero[8].'/'.$materiaPrima[8] ?>">
								<?php echo $numero[8] ?>
							</div>
						</div>
						<div class="deserto" style="bottom:75px;right:1px;">
							<div class="numeros 7">
								<input type="hidden" value="<?php echo $numero[18].'/'.'deserto' ?>">
								7
							</div>
						</div>
						<div class="<?php echo $materiaPrima[9]?>" style="bottom:75px;right:7px;">
							<div id="<?php echo $numero[9]?>" class="numeros <?php echo $numero[9]?>">
								<input type="hidden" value="<?php echo $numero[9].'/'.$materiaPrima[9] ?>">
								<?php echo $numero[9] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[10]?>" style="bottom:75px;right:13px;">
							<div id="<?php echo $numero[10]?>" class="numeros <?php echo $numero[10]?>">
								<input type="hidden" value="<?php echo $numero[10].'/'.$materiaPrima[10] ?>">
								<?php echo $numero[10] ?>
							</div>
						</div><br>
					</div>

					<div id="quatro">
						<div class="<?php echo $materiaPrima[11]?>" style="bottom:115px;left:9px;">
							<div id="<?php echo $numero[11]?>" class="numeros <?php echo $numero[11]?>">
								<input type="hidden" value="<?php echo $numero[11].'/'.$materiaPrima[11] ?>">
								<?php echo $numero[11] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[12]?>" style="bottom:115px;left:2px;">
							<div id="<?php echo $numero[12]?>" class="numeros <?php echo $numero[12]?>">
								<input type="hidden" value="<?php echo $numero[12].'/'.$materiaPrima[12] ?>">
								<?php echo $numero[12] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[13]?>" style="bottom:115px;right:4px;">
							<div id="<?php echo $numero[13]?>" class="numeros <?php echo $numero[13]?>">
								<input type="hidden" value="<?php echo $numero[13].'/'.$materiaPrima[13] ?>">
								<?php echo $numero[13] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[14]?>" style="bottom:115px;right:10px;">
							<div id="<?php echo $numero[14]?>" class="numeros <?php echo $numero[14]?>">
								<input type="hidden" value="<?php echo $numero[14].'/'.$materiaPrima[14] ?>">
								<?php echo $numero[14] ?>
							</div>
						</div><br>
					</div>

					<div id="cinco">
						<div class="<?php echo $materiaPrima[15]?>" style="bottom:155px;left:5.4">
							<div id="<?php echo $numero[15]?>" class="numeros <?php echo $numero[15]?>">
								<input type="hidden" value="<?php echo $numero[15].'/'.$materiaPrima[15] ?>">
								<?php echo $numero[15] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[16]?>" style="bottom:155px;">
							<div id="<?php echo $numero[16]?>" class="numeros <?php echo $numero[16]?>">
								<input type="hidden" value="<?php echo $numero[16].'/'.$materiaPrima[16] ?>">
								<?php echo $numero[16] ?>
							</div>
						</div>
						<div class="<?php echo $materiaPrima[17]?>" style="bottom:155px;right:5.4">
							<div id="<?php echo $numero[17]?>" class="numeros <?php echo $numero[17]?>">
								<input type="hidden" value="<?php echo $numero[17].'/'.$materiaPrima[17] ?>">
								<?php echo $numero[17] ?>
							</div>
						</div><br>
					</div>

				</div>
			</div>
			<div>
				<a href="#">
					<div class="settlement" onclick="construir(1)" style="top:90px;left: 588px;">1</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:90px;left: 701px;">2</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:90px;left: 813px;">3</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" onclick="construir(4)" style="top:120px;left: 535px;">4</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:120px;left: 646px;">5</div>
				</a>
				<a href="#">
					<div class="settlement"style="top:120px;left: 760px;">6</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:120px;left: 870px;">7</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:190px;left: 535px;">8</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:190px;left: 646px;">9</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:190px;left: 760px;">10</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:190px;left: 870px;">11</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:222px;left: 475px;">12</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:222px;left: 588px;">13</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:222px;left: 701px;">14</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:222px;left: 813px;">15</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:222px;left: 925px;">16</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:291px;left: 475px;">17</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:291px;left: 588px;">18</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:291px;left: 701px;">19</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:291px;left: 813px;">20</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:291px;left: 925px;">21</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:325px;left: 420px;">22</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:325px;left: 535px;">23</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:325px;left: 646px;">24</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:325px;left: 760px;">25</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:325px;left: 870px;">26</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:325px;left: 985px;">27</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:390px;left: 420px;">28</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:390px;left: 535px;">29</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:390px;left: 646px;">30</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:390px;left: 760px;">31</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:390px;left: 870px;">32</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:390px;left: 985px;">33</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:420px;left: 475px;">34</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:420px;left: 588px;">35</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:420px;left: 701px;">36</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:420px;left: 813px;">37</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:420px;left: 925px;">38</div>
				</a>
			</div>

			<div>
				<a href="#">
					<div class="settlement" style="top:490px;left: 475px;">39</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:490px;left: 588px;">40</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:490px;left: 701px;">41</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:490px;left: 813px;">42</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:490px;left: 925px;">43</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:520px;left: 535px;">44</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:520px;left: 646px;">45</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:520px;left: 760px;">46</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:520px;left: 870px;">47</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:588px;left: 535px;">48</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:588px;left: 646px;">49</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:588px;left: 760px;">50</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:588px;left: 870px;">51</div>
				</a>
			</div>
			<div>
				<a href="#">
					<div class="settlement" style="top:620px;left: 588px;">52</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:620px;left: 701px;">53</div>
				</a>
				<a href="#">
					<div class="settlement" style="top:620px;left: 813px;">54</div>
				</a>
			</div>
		</center>
	</div>
</body>
