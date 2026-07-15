"use strict";

(() => {
    const storageKey = 'gdo|bs5|sidebar-collapsed';

    const setSidebarState = (collapsed) => {
        document.body.classList.toggle('sb-sidenav-toggled', collapsed);
        try {
            localStorage.setItem(storageKey, collapsed ? '1' : '0');
        }
        catch (e) {
            // Storage can be disabled without breaking navigation.
        }
    };

    const initSidebar = () => {
        const toggle = document.getElementById('sidebarToggle');
        if (!toggle) {
            return;
        }

        try {
            setSidebarState(localStorage.getItem(storageKey) === '1');
        }
        catch (e) {
            // Ignore unavailable storage.
        }

        toggle.addEventListener('click', (event) => {
            event.preventDefault();
            setSidebarState(!document.body.classList.contains('sb-sidenav-toggled'));
        });
    };

    const initBootstrapTooltips = () => {
        if (!window.bootstrap?.Tooltip) {
            return;
        }
        document.querySelectorAll('[data-bs-toggle="tooltip"]').forEach((element) => {
            bootstrap.Tooltip.getOrCreateInstance(element);
        });
    };

    window.addEventListener('DOMContentLoaded', () => {
        document.documentElement.classList.remove('nojs');
        document.body.classList.remove('nojs', 'n');
        initSidebar();
        initBootstrapTooltips();
    });

    window.GDO = window.GDO || {};
    window.GDO.Language = window.GDO.Language || {};
    window.GDO.Language.switch = (iso) => {
        const current = window.location.pathname + window.location.search + window.location.hash;
        const root = window.GDO_WEB_ROOT || '/';
        const url = new URL('index.php', new URL(root, window.location.origin));
        url.searchParams.set('_mo', 'Language');
        url.searchParams.set('me', 'SwitchLanguage');
        url.searchParams.set('ref', current);
        url.searchParams.set('_lang', iso);
        window.location.assign(url.toString());
    };

    const convertPhpDateFormat = (format) => {
        const replacements = {
            d: 'DD', D: 'ddd', j: 'D', l: 'dddd', N: 'E', S: 'o', w: 'e', z: 'DDD', W: 'W',
            F: 'MMMM', m: 'MM', M: 'MMM', n: 'M', t: '', L: '', o: 'YYYY', Y: 'YYYY', y: 'YY',
            a: 'a', A: 'A', B: '', g: 'h', G: 'H', h: 'hh', H: 'HH', i: 'mm', s: 'ss', u: 'SSS',
            e: 'zz', I: '', O: '', P: '', T: '', Z: '', c: '', r: '', U: 'X'
        };
        return String(format || '').replace(/\\?.|./g, (token) => {
            if (token.startsWith('\\')) {
                return `[${token.slice(1)}]`;
            }
            return Object.prototype.hasOwnProperty.call(replacements, token) ? replacements[token] : token;
        });
    };

    const initDateInputs = ($) => {
        const language = window.GDO_LANGUAGE || 'en';
        const translate = window.GDO_TRANS?.t;
        const dayFormat = convertPhpDateFormat(translate ? translate('df_day') : 'Y-m-d');
        const dateTimeFormat = convertPhpDateFormat(translate ? translate('df_short') : 'Y-m-d H:i');

        if ($.fn.datepicker) {
            $('.gdt-date input, .gdt-birthdate input').each(function () {
                const input = $(this);
                if (!input.data('datepicker')) {
                    input.datepicker({
                        autoclose: true,
                        todayHighlight: true,
                        language,
                        format: dayFormat.toLowerCase(),
                    });
                }
            });
        }

        if ($.fn.datetimepicker) {
            $('.gdt-datetime input').each(function () {
                const input = $(this);
                if (!input.data('DateTimePicker')) {
                    input.datetimepicker({
                        useCurrent: false,
                        locale: language,
                        format: dateTimeFormat,
                    });
                }
            });
        }
    };

    const initSubmitClickAreas = ($) => {
        $(document).on('click', '.gdt-submit', function (event) {
            if ($(event.target).is('input, button, a, label')) {
                return;
            }
            const submit = $(this).find('input[type="submit"], button[type="submit"]').first();
            if (submit.length && !submit.prop('disabled')) {
                submit.trigger('click');
            }
        });
    };

    const installErrorDialog = ($) => {
        window.GDO.error = (html, title = 'Error') => {
            debugger;
            
            if (!window.bootstrap?.Modal) {
                window.alert($('<div>').html(html).text());
                return;
            }

            const dialog = $(
                '<div class="modal fade gdo-modal-error" tabindex="-1" aria-hidden="true">' +
                '  <div class="modal-dialog modal-dialog-scrollable">' +
                '    <div class="modal-content">' +
                '      <div class="modal-header">' +
                '        <h5 class="modal-title"></h5>' +
                '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>' +
                '      </div>' +
                '      <div class="modal-body"></div>' +
                '    </div>' +
                '  </div>' +
                '</div>'
            );

            dialog.find('.modal-title').text(title);
            dialog.find('.modal-body').html(html);
            dialog.appendTo(document.body);

            const modal = new bootstrap.Modal(dialog[0]);
            dialog.one('hidden.bs.modal', () => {
                modal.dispose();
                dialog.remove();
            });
            modal.show();
        };
    };

    if (window.jQuery) {
        jQuery(($) => {
            installErrorDialog($);
            initDateInputs($);
            initSubmitClickAreas($);
        });
    }
})();
