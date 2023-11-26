<h1 class="text-center mt-4">Universidad Técnica de Cotopaxi Sedes</h1>
<img src="<?php echo base_url('assets/img/logo.png') ?>" alt="logo utc" width="100px">
<div id="map" style="width: 100%; height:400px; border: 1px solid black;">
</div>
<script>
	function initMap() {
		const coordenada = new google.maps.LatLng(-0.9177693410536122, -78.63305017348085);
		const miMapa = new google.maps.Map(
			document.getElementById('map'), {
				center: coordenada,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				zoom: 11
			}
		);
		var marcadorUTC = new google.maps.Marker({
			position: new google.maps.LatLng(-0.9177693409807878, -78.63296434247631),
			map: miMapa,
			title: 'Universidad Técnica de Cotopaxi'
		});
		var marcadorUTCPuji = new google.maps.Marker({
			position: new google.maps.LatLng(-0.958312345755052, -78.69648000484247),
			map: miMapa,
			title: 'Universidad Técnica de Cotopaxi  Extensión Pujili',
			icon: '<?php echo base_url('assets/img/logo.png') ?>'
		});
		var marcadorUTCSalache = new google.maps.Marker({
			position: new google.maps.LatLng(-0.9994373593852505, -78.61913486062852),
			map: miMapa,
			title: 'Universidad Técnica de Cotopaxi  Extensión Salache'
		});
		var marcadorUTCLaMana = new google.maps.Marker({
			position: new google.maps.LatLng(-0.9439864343096976, -79.23812568449081),
			map: miMapa,
			tittle: 'Universidad Técnica de Cotopaxi Extension La Mana'
		});
	}
</script>