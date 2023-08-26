<section class="space-y-6">
    <button class="ml-3 text-red-600 hover:text-red-800">
        <i class="fa fa-trash" x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-client-deletion{{$servico->id}}')">
        </i>
    </button>

    <x-modal name="confirm-client-deletion{{$servico->id}}" :show="$errors->userDeletion->isNotEmpty()" focusable style="display: flex; align-items: center; justify-content: center;">
        <form method="post" action="{{ route('servico.destroy', $servico->id) }}" class="p-6 bg-lime-100 rounded-lg shadow-md">
            @csrf
            @method('delete')

            <h2 class="text-lg text-left font-medium text-gray-900">
                {{ __('Deletar cliente?') }}
            </h2>
            <p class="text-gray-600 mt-2">
                {{ __('Esta ação é irreversível. Os dados do cliente serão permanentemente excluídos.') }}
            </p>

            <div class="mt-6 flex justify-end">
                <x-secondary-button x-on:click="$dispatch('close')">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3">
                    {{ __('Deletar') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
