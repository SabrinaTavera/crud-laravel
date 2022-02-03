$(function() {


    /**
     * Mascaras
     */
    $(".cell").mask("(00) 0 0000-0000");
    $(".cep").mask("00000-000");



    $('.data-provider').hide();
    $('.access-collaborator').hide();


    $('.check-fornecedor').on('click', function() {
        $('.data-provider').show();
    });

    $('.check-colaborador').on('click', function() {
        $('.data-provider').hide();
    });

    $('.acess-collaborator-false').on('click', function() {
        $('.email').val('');
        $('.password').val('');
        $('.access-collaborator').hide();
    });
    $('.acess-collaborator-true').on('click', function() {
        $('.access-collaborator').show();
    });
});