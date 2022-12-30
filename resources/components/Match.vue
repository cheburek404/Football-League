<template>
    <div class="match" id="match1">
        <div class="match__item">
            <label for="">Название первого клуба</label>
            <select
                    class="form-select"
                    required>
                <option value="{{ $club->id }}"></option>
            </select>
        </div>
        <div class="match__item">
            <label for="">Указать время</label>
            <input type="text"
                   name="time"
                   class="form-control" />
        </div>
        <div class="match__item">
            <label for="">Название второго клуба</label>
            <select 
                    class="form-select"
                    required>
                <option value="{{ $club->id }}"></option>
            </select>
        </div>
    </div>
</template>
<script>
export default {
    name: "Home",
};
</script>
<style></style>
