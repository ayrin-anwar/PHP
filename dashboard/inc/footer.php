  
    <script src="../assets/lib/popper.js/popper.js"></script>
    <script src="../assets/lib/bootstrap/bootstrap.js"></script>
    <script src="../assets/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

    <script src="../assets/js/starlight.js"></script>
<script src="//cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js">
</script>
 
<script >
	$(document).ready( function () {
    $('#myTable').DataTable();
		
		
		var slider = document.getElementById("progress");
var output = document.getElementById("demo");
output.innerHTML = slider.value; // Display the default slider value

// Update the current slider value (each time you drag the slider handle)
slider.oninput = function() {
  output.innerHTML = this.value;
}
} );</script>

 