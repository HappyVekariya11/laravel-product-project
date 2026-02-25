import axios from 'axios';
window.axios = axios;
// window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

import toastr from 'toastr';
toastr.options.positionClass = 'toast-bottom-right';
toastr.options.progressBar = true;
window.toastr = toastr;

import Tagify from '@yaireo/tagify';
window.Tagify = Tagify;
