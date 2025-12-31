import axios from 'axios'

axios.defaults.withCredentials = true;
axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
axios.defaults.headers.common['X-Locale'] = localStorage.hasOwnProperty('locale') ? localStorage.locale : window.AppConfig.defaultLocale;
axios.defaults.headers.common['Content-Type'] = 'application/json';

// Ensure baseURL uses same protocol as current page (HTTPS/HTTP)
const getBaseURL = () => {
    let url = window.AppConfig?.url || window.location.origin;
    
    // Ensure URL uses same protocol as current page
    if (window.location.protocol === 'https:' && url.startsWith('http:')) {
        url = url.replace('http:', 'https:');
    } else if (window.location.protocol === 'http:' && url.startsWith('https:')) {
        url = url.replace('https:', 'http:');
    }
    
    return url;
};

axios.defaults.baseURL = getBaseURL();

export default axios;
