<?php $this->load->view('templates/header');?>
<!-- contact -->
<div class="contact">
	<div class="container">
		<div class="contact-agileinfom">
			<h4>Information :</h4>
			<p>Komplek Taman Kurnia Djaja Trade Center Block A No. 14 Batam Kota<br>
				Batam 29464 Indonesia <br>
				Telp : +62 778 5119404<br>
				Fax :+62 778 7486584<br>
				Hp : +62 81270045489<br>
				E-Mail: qe.services@qes.co.id<br>
			Website: http://www.qes.co.id</p>
		</div>	
		<div class="contact-form agileits-w3layouts">
			<h4>Contact Form</h4>
			<form action="<?php echo site_url('kontak/tambah_aksi');?>" method="post">
				<input type="hidden" name="id_contact" value="">
				<input type="text" name="nama" placeholder="Name" required>
				<input type="email" name="email" placeholder="Email" required>
				<input type="text" name="hp" placeholder="Telephone" required>
				Service Interest : <br><br>
				<select name="service" id="selector1">
					<option value="Design Review Approval">Design Review Approval</option>
					<option value="Lifting Equipment Inspection">Lifting Equipment Inspection</option>
					<option value="Pipe mill Inspection/Monitoring">Pipe mill Inspection/Monitoring</option>
					<option value="OCTG Inspection">OCTG Inspection</option>
					<option value="QA/QC TPI">QA/QC TPI</option>
					<option value="Vendor Inspection">Vendor Inspection</option>
					<option value="Vendor Expediting">Vendor Expediting</option>
					<option value="Witnessing of Material Testing">Witnessing of Material Testing</option>
					<option value="FLUT Inspection">FLUT Inspection</option>
					<option value="Weld Procedure Review & Approval">Weld Procedure Review & Approval</option>
					<option value="Welder Qualification">Welder Qualification</option>
					<option value="Field Service Inspection">Field Service Inspection</option>
					<option value="Pre Vendor Production Meeting">Pre Vendor Production Meeting</option>
					<option value="E&I Inspection">E&I Inspection</option>
					<option value="Coating & Painting Inspection">Coating & Painting Inspection</option>
					<option value="Wellhead Manufacturing Inspection">Wellhead Manufacturing Inspection</option>
					<option value="LAN Inspection">LAN Inspection</option>
					<option value="Quality Management Auditor">Quality Management Auditor</option>
					<option value="Safety Management Auditor">Safety Management Auditor</option>
				</select>
				<br>
				<br>
				<textarea placeholder="Feedback" name="feed" required></textarea>
				<button class="btn1 btn-1 btn-1b w3-agile">Submit</button>
			</form>
		</div>	
	</div>
</div>
<!-- //contact -->
<?php $this->load->view('templates/footer');?>


