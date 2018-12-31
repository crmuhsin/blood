$(document).ready(function(){
	//contact table
    // $('.cnttable').hide();
    // $('.add').on('click', function (e) {
    //     $('.cnttable').toggle('slow', function(){});
    // });

	//NID or Birth
    $('.nationalr').hide();
    $('.birthr').hide();

    $(".ndbc").click(function(){
        var value = this.value;
        if (value == "nid"){
            $(".nationalr").show('slow', function(){});
            $(".birthr").hide('slow', function(){});
        } else {
            $(".birthr").show('slow', function(){});
            $(".nationalr").hide('slow', function(){});            
        }
    });

    //Married
    $('.spouse').hide();

    $("#mar").change(function(){
        var value = this.value;
        if (value == "married"){
            $(".spouse").show('slow', function(){});
        } else{
            $(".spouse").hide('slow', function(){});
        }
    });

    //edit_field
    $('.edit_field').hide();
    $('.edit').on('click', function (e) {
        e.preventDefault(); 
        $($(this).attr('href')).toggle('slow', function(){});
    });
    $('.edit_field a,.edit_field input[type=submit]').click(function() {
        $('.edit_field').hide(400);
    });
});