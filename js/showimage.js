
		function showimage(x) {
			var modal = document.getElementById("myModal");
			var img = document.getElementById(x);
			var modalImg = document.getElementById("img01");
 			modal.style.display = "block";
  			modalImg.src = img.src;
			var span = document.getElementsByClassName("close")[0];

			span.onclick = function() { 
  				modal.style.display = "none";
			}
		}