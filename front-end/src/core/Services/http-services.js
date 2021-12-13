import axios from 'axios';
export const HTTP = axios.create({
    withCredentials:true,
   

    baseURL: " http://127.0.0.1:8000/",
   
});