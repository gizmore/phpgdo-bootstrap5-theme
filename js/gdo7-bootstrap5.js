"use strict";

window.addEventListener('DOMContentLoaded', event => {

	document.body.classList.remove('nojs');
	document.body.classList.remove('n');

	// Toggle the side navigation
    const sidebarToggle = document.body.querySelector('#sidebarToggle');
    if (sidebarToggle) {
        // Uncomment Below to persist sidebar toggle between refreshes
        // if (localStorage.getItem('sb|sidebar-toggle') === 'true') {
        //     document.body.classList.toggle('sb-sidenav-toggled');
        // }
        sidebarToggle.addEventListener('click', event => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
//            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    }

});

window.GDO = window.GDO || {};

window.GDO.Language = {
	'switch': function(iso) {
		var curr = window.location.pathname + window.location.search;
		var href = window.GDO_WEB_ROOT + "index.php?_mo=Language&me=SwitchLanguage";
		href += "&ref=" + encodeURIComponent(curr);
		href += "&_lang=" + iso;
		window.location.href = href;
	}
};


$(function(){
	let conv = function(format) {
		let replace = {
			'd': 'dd',
			'D': 'D',
			'j': 'DD',
			'l': 'DD',
			'N': 'E',
			'S': 'o',
			'w': 'e',
			'z': 'DD',
			'W': 'W',
			'F': 'mmm',
			'm': 'mm',
			'M': 'MM',
			'n': 'MM',
			't': '', // no equivalent
			'L': '', // no equivalent
			'o': 'yyyy',
			'Y': 'yyyy',
			'y': 'yy',
			'a': 'a',
			'A': 'A',
			'B': '', // no equivalent
			'g': 'h',
			'G': 'H',
			'h': 'hh',
			'H': 'HH',
			'i': 'mm',
			's': 'ss',
			'u': 'SSS',
			'e': 'zz', // deprecated since version 1.6.0 of moment.js
			'I': '', // no equivalent
			'O': '', // no equivalent
			'P': '', // no equivalent
			'T': '', // no equivalent
			'Z': '', // no equivalent
			'c': '', // no equivalent
			'r': '', // no equivalent
			'U': 'X',
		};
		return strtr(format, replace);
	};
	
	$('.gdt-date input').datepicker({
		useCurrent: false,
		locale: GDO_LANGUAGE,
		format: conv(GDO_TRANS.t('df_day')),
	});
	
	$('.gdt-datetime input').datetimepicker({
		useCurrent: false,
		locale: GDO_LANGUAGE,
		format: conv(GDO_TRANS.t('df_short')),
	});
	
	$('.gdt-birthdate input').datepicker({
		useCurrent: false,
		locale: GDO_LANGUAGE,
		format: conv(GDO_TRANS.t('df_day')),
	});
	
	// Clickarea enlarger for submits.
	$('.gdt-submit').click(function(e){
		if(e.target.nodeName === 'INPUT') {
        	e.stopPropagation();
	        return;
		}
		$(this).find('input').click();
		return false;
	});

	window.GDO.error = function(html, title) {
		var dialog = $('\
<div class="modal" tabindex="-1">\
  <div class="modal-dialog">\
    <div class="modal-content">\
      <div class="modal-header">\
        <h5 class="modal-title">'+title+'</h5>\
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>\
      </div>\
      <div class="modal-body">\
        <p>'+html+'</p>\
      </div>\
    </div>\
  </div>\
</div>');
		$('body').append(dialog);
		const options = {
		};
		const m = new bootstrap.Modal('.gdo-modal', options);
	};

});
