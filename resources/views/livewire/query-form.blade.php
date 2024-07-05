<div>
    @if ($success)
        <div class="alert alert-success">
            {{ $success }}
        </div>
    @endif
    @if ($response)
        <div class="alert alert-info">
            <strong>Response:</strong> {{ $response }}
        </div>
    @endif

    <form wire:submit.prevent="submit">
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" wire:model="name">
            @error('name') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" wire:model="email">
            @error('email') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <div class="form-group">
            <label for="message">Message:</label>
            <textarea class="form-control" id="message" wire:model="message" rows="5"></textarea>
            @error('message') <span class="text-danger">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

