function newCbLanguage() {
	openCbLanguage('new', null, null, null, null, null, null, null);
}

function openCbLanguage(action, idlanguage, namelanguage, isactive, languageiso, countrycode, isbaselanguage, issystemlanguage) {
    document.formCbLanguage.idlanguage.value = idlanguage;
    document.formCbLanguage.namelanguage.value = namelanguage;
    document.formCbLanguage.isactive.value = isactive;
    document.formCbLanguage.languageiso.value = languageiso;
    document.formCbLanguage.countrycode.value = countrycode;
    document.formCbLanguage.isbaselanguage.value = isbaselanguage;
    document.formCbLanguage.issystemlanguage.value = issystemlanguage;
     
    document.formCbLanguage.idlanguage.disabled = (action === 'see') ? true: false;
    document.formCbLanguage.namelanguage.disabled = (action === 'see') ? true: false;
    document.formCbLanguage.isactive.disabled = (action === 'see') ? true: false;
    document.formCbLanguage.languageiso.disabled = (action === 'see') ? true: false;
    document.formCbLanguage.countrycode.disabled = (action === 'see') ? true: false;
    document.formCbLanguage.isbaselanguage.disabled = (action === 'see') ? true: false;
    document.formCbLanguage.issystemlanguage.disabled = (action === 'see') ? true: false;
     
    $('#myModal').on('shown.bs.modal', function () {
        var modal = $(this);
        if (action === 'new') {
            modal.find('.modal-title').text('Creación de idioma');
            $('#update-language').hide();
            $('#save-language').show();
        } else if (action === 'edit'){
            modal.find('.modal-title').text('Actualizar idioma');
            $('#save-language').hide();
            $('#update-language').show();
        } else if (action === 'see'){
            modal.find('.modal-title').text('Ver idioma');
            $('#save-language').hide();   
            $('#update-language').hide();   
        }
        $('#idlanguage').focus();
    });
}
function deleteCbLanguage(idlanguage){     
    document.formDeleteCbLanguage.idlanguagedelete.value = idlanguage;                
		$('#myModalDelete').on('shown.bs.modal', function () {
		$('#myInput').focus();
	});
}  