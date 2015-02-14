$(function(){
    $(".chkp_action").click(function(){ calculate($(this)); })
})

function calculate(clicked) {
    // Averiguamos la categoría del elemento clickeado
    var categoria = clicked.attr('class').split(' ').slice(-1).toString().substring(6);

    // Averiguamos la cantidad de respuestas yes,kind y no
    var yes = $(".y_cat_"+categoria+":checked").length;
    var kind = $(".k_cat_"+categoria+":checked").length;
    var no = $(".n_cat_"+categoria+":checked").length;

    // Averiguamos los totales de categoría
    var raw_score = yes - no;
    var answers = yes + kind + no;
    var score = "";
    if (answers > 0) { score = ((raw_score + answers) / (2 * answers) * 100).toFixed(0).toString(); }

    // Actualizamos los totales visuales de la categoría
    $("#raw_score_"+categoria).html(raw_score.toString());
    $("#answers_"+categoria).html(answers.toString());
    $("#score_"+categoria).html( ((score!="")?score+"%":"") );

    //// Actualizamos los overall scores
    // Averiguamos la suma de answers de todas las categorías
    $("#overall_answers").html(get_aggregate($(".answers")));
    // Averiguamos el promedio para el overall score
    $("#overall_score").html(get_average($(".score")));
}

function get_aggregate(elements)
{
    var aggregate = 0;
    var value;
    elements.each( function() {
        aggregate += ((isNaN(value=parseInt($(this).html())))?0:value);
    });
    return aggregate;
}

function get_average(elements)
{
    var aggregate = 0;
    var counter = 0;
    var average = 0;
    var value;
    elements.each( function() {
        value = $(this).html();
        if (value != "") {
            aggregate += parseInt(value.substring(0,value.length-1));
            counter++;
        }
    });
    average = ((counter>0)?(aggregate / counter):0);
    return ((average==0)?"":average.toFixed(0).toString()+"%");
}