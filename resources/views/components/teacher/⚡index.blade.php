<?php

use Livewire\Component;

new class extends Component
{
    //
};
?>
<div>
    <flux:heading size="xl">Teacher</flux:heading>
    <flux:text class="mt-1 mb-2">Manage Teachers.</flux:text>
    
    <flux:separator class="mb-4" />

    <flux:modal.trigger name="edit-profile" >
        <flux:button 
            class="mb-4 cursor-pointer" 
            variant="primary" 
            color="blue" 
            icon="user-plus"
            href="{{ route('teacher.create') }}"
            >Add Teacher</flux:button>
    </flux:modal.trigger>

    <flux:table>
        <flux:table.columns>
            <flux:table.column>
                TEST
            </flux:table.column>
            <flux:table.column>
                TEST
            </flux:table.column>
            <flux:table.column>
                TEST
            </flux:table.column>
            <flux:table.column>
                TEST
            </flux:table.column>
        </flux:table.columns>


        <flux:table.rows>
            <flux:table.row>
                <flux:table.cell>
                    Table data
                </flux:table.cell>
                 <flux:table.cell>
                    Table data
                </flux:table.cell>
                 <flux:table.cell>
                    Table data
                </flux:table.cell>
                 <flux:table.cell>
                    Table data
                </flux:table.cell>
            </flux:table.row>
        </flux:table.rows>
    </flux:table>


</div>
