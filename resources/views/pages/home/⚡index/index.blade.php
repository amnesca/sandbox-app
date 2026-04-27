<div>
    <!-- Header -->
    <x-header title="Home" separator />

    <x-textarea label="Input One" wire:model="input_one" wire:dirty.class="text-red-500!" rows="5" />

    <x-choices label="Multiple" wire:model="userIds" :options="$users" placeholder="Search ..." searchable clearable />

    <div class="box mt-10"></div>
</div>

@assets
<script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
@endassets