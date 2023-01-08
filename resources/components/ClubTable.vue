<template>
    <div class="club-talbe">
        <div class="container">
            <h2>Таблица</h2>

            <h5>Первая лига</h5>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="3"></th>
                        <th>И</th>
                        <th>B</th>
                        <th>N</th>
                        <th>P</th>
                        <th>M</th>
                        <th>O</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>
                            <img src="/img/logo.png" class="logo">
                        </td>
                        <td>Shalkar</td>
                        <td>2</td>
                        <td>3</td>
                        <td>1</td>
                        <td>2</td>
                        <td>3</td>
                        <td>1</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</template>
<script>
import axios from 'axios';

export default {
    name: 'ClubTable',
    data() {
        return {
            clubs: [],
        }
    },
    methods: {
        getAllClubs() {
            axios
                .get('/api/club')
                .then(response => {
                    clubs = response.data;
                    console.log(clubs);
                });
        }
    }
}
</script>
<style>

</style>