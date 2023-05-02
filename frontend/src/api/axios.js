import axios from 'axios';

axios.defaults.withCredentials = true;

export default axios.create({
    baseURL:"http://127.0.0.1:8000",
})

export const getCsrfToken = () => {
    return axios.get('/sanctum/csrf-cookie');
  };