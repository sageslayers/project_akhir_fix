$('#modelId2').modal({
    show: true
})
$(document).ready(function() {
    $('#tabelmodel').DataTable();
} );
$(document).ready(function(){
    var maxField = 50; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var x = 1; //Initial field counter is 1

    //Once add button is clicked
    $(addButton).click(function(){

        //Check maximum number of input fields
        if(x < maxField){
            x++; //Increment field counter
            $(wrapper).append(`
            <div>
            <div class="input-group input-group-alternative">
            <div class="input-group-prepend">
                <span class="input-group-text"><strong>`+x+`.</strong> </span>

            </div>

            <input class="form-control" placeholder="Question" value="" type="text" name="pertanyaan[]" required autofocus>
        </div>
        <div class="attachmentDiv">

        </div>
        <div class ="form-row">
        <div class="col">
        <input type="text" class ="form-control" name="jawaban[]" placeholder="Answer" value=""/>
        </div>
        <div class="col">
        <input type="text" class ="form-control" name="pengecoh1[]" placeholder="Distractor" value=""/>
        </div>
        <div class="col">
        <input type="text" class ="form-control" name="pengecoh2[]" placeholder="Distractor" value=""/>
        </div>
        <div class="col">
        <input type="text" class ="form-control" name="pengecoh3[]" placeholder="Distractor" value=""/>
        </div>
        </div>
        <a href="javascript:void(0);" class="remove_button" title="Add field"><img src="../../assets/img/icons/remove.png" width="25"/></a>

        </div>
        </div>
        `); //Add field html
        }
    });

    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
