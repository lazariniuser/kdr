
$(document).ready(function() {
 
    for(let i=0; i<=10000; i++){
        let tempo = setTimeout(()=>{
        $('#numero-seguidores')[0].innerHTML = `<h1>Mais de <span class="col-12 text-center fw-bolder contador" id="contador">
        ${i} seguidores!</span></h1>
        `   
        },i*0.5)
        }
 
        }
        


)
   

        

function ativadropinho(){
    
    $('#chatbot').toggleClass('d-none')
    $('#btn-dropinho').addClass('d-none') 
}



function minimizar(){
    $('#chatbot').toggleClass('d-none')
    $('#btn-dropinho').toggleClass('d-none') 

}

