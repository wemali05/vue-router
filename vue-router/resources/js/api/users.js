import axios from 'axios';

export default {
    all() {
        return axios.get('/api/users');
    },
    find(id) {
        return axios.get(`/api/users/${id}`);
    },
    update(id, data) {
        return axios.put(`/api/users/${id}`, data);
    },
};

