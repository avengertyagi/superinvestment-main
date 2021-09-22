<div class="w-full bg-white mx-auto grid md:grid-cols-2 mt-14 gap-16">
    @forelse($deals as $deal)
    <x-deals.deal-card :deal="$deal"></x-deals.deal-card>
    @empty
        <p>No Deals</p>
    @endforelse
</div>