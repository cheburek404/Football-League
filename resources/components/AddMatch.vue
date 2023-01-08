<template>
    <div class="count">
        <div class="count__item">
            <label for="">Количество событий</label>
            <input
                type="text"
                id="add_events"
                class="form-control"
                name="count"
                v-model="countMatches"
            />
        </div>

        <div class="count__item">
            <button
                class="btn btn-success"
                @click="getCountMatches(countMatches)"
                style="margin-left: 5px"
            >
                Добавить
            </button>
        </div>
    </div>
    <br />
    <div v-for="(item, index) of test" :key="index" class="match" id="match1">
        <div class="match__item">
            <label for="">Название первого клуба</label>
            <select class="form-select" required>
                <option v-for="club of clubs" :key="club.id" value="">
                    {{ club.name }}
                </option>
            </select>
        </div>
        <div class="match__item">
            <label for="">Указать время</label>
            <input type="text" name="time" class="form-control" />
        </div>
        <div class="match__item">
            <label for="">Название второго клуба</label>
            <select class="form-select" required>
                <option v-for="club of clubs" :key="club.id" value="">
                    {{ club.name }}
                </option>
            </select>
        </div>
    </div>
</template>
<script>
export default {
    name: "Home",
    data() {
        return {
            clubs: [],
            countMatches: 0,
            test: [0],
        };
    },
    methods: {
        getAllClubs() {
            axios.get("/api/club").then((response) => {
                this.clubs = response.data;
            });
        },
        getCountMatches(param) {
            for (let i = 0; i < param - 1; i++) {
                this.test += i;
            }
        },
    },
    mounted() {
        this.getAllClubs();
    },
};
</script>
<style></style> 