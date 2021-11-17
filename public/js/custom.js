/* Funcionamiento delos Tabs */

let tabsContainer = document.querySelector("#tabs");

let tabTogglers = tabsContainer.querySelectorAll("#tabs a");

console.log(tabTogglers);

tabTogglers.forEach(function(toggler) {
  toggler.addEventListener("click", function(e) {
    e.preventDefault();

    let tabName = this.getAttribute("href");

    let tabContents = document.querySelector("#tab-contents");

    for (let i = 0; i < tabContents.children.length; i++) {
      
      tabTogglers[i].parentElement.classList.remove("border-t", "border-r", "border-l", "-mb-px", "bg-white");  tabContents.children[i].classList.remove("hidden");
      if ("#" + tabContents.children[i].id === tabName) {
        continue;
      }
      tabContents.children[i].classList.add("hidden");
      
    }
    e.target.parentElement.classList.add("border-t", "border-r", "border-l", "-mb-px", "bg-white");
  });
});

/* Cambio de estatus */

$(".item-remov").on("click", function(){
var token = $("meta[name='csrf-token']").attr("content");
	
		var id = $(this).data("id");
		
			$.ajax(
			{
				url: "/assignments/updateStatus",
				type: 'POST',
				data: {
					"id": id,
					"_token": token,
				},
				success: function (){	
					location.reload();
				}
			});
			
});		


/* Eliminar Lista */


		  $(".remov-lista").on("click", function(){
				Swal.fire({
				  title: '¿Está seguro?',
				  text: "¡Esta acción no se puede revertir!",
				  icon: 'warning',
				  showCancelButton: true,
				  confirmButtonColor: '#3085d6',
				  cancelButtonColor: '#d33',
				  confirmButtonText: '¡Sí, eliminar!',
				  cancelButtonText: 'Cancelar'
				}).then((result) => {
				  if (result.isConfirmed) {
					  
					$.ajax(
						{
							url: "/assignments/destroy",
							type: 'POST',
							data: {
								
								"_token": $("meta[name='csrf-token']").attr("content"),
							},
							success: function (){	
								location.reload();
								Swal.fire({
								  title: 'Eliminada!',
								  text: 'La lista ha sido eliminada exitosamente',
								  icon:'success',
								  timer: 3000,
								  showConfirmButton: false
								})
							}
						});
					  
					  
					
				  }
				})
				

		  });

		
