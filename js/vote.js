$('.btn-vote').click(function (event){
    let $form = $(this).parents('form');
    let $count = $(this).find('span');

    console.log($form);

    $.post('includes/vote.php', $form.serialize(), function(error){
        if (error){
            alert(error);
        }
        $count.text(
            parseInt($count.text()) + 1
        );
    }) 
    return false;
});