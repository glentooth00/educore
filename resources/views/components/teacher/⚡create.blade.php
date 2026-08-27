<?php

use Livewire\Component;
use Livewire\WithFileUploads;

new class extends Component
{
    use WithFileUploads;

    public string $employee_id = '';
    public string $first_name = '';
    public string $middle_name = '';
    public string $last_name = '';
    public string $suffix = '';
    public $user_image;
    public string $sex = '';
    public string $birth_date = '';
    public string $email = '';
    public string $contact_number = '';
    public string $address = '';
    public string $position = '';
    public string $department = '';
    public string $date_hired = '';
    public string $employment_status = '';
    public bool $is_active = true;

    public function save()
    {
        $this->validate([
            'employee_id' => 'required|string|max:50|unique:teachers,employee_id',
            'first_name' => 'required|string|max:100',
            'middle_name' => 'nullable|string|max:100',
            'last_name' => 'required|string|max:100',
            'suffix' => 'nullable|string|max:20',
            'user_image' => 'nullable|image|max:2048',
            'sex' => 'required|in:Male,Female',
            'birth_date' => 'required|date',
            'email' => 'required|email|max:255',
            'contact_number' => 'nullable|string|max:30',
            'address' => 'nullable|string',
            'position' => 'required|string|max:100',
            'department' => 'required|string|max:100',
            'date_hired' => 'required|date',
            'employment_status' => 'required|string|max:50',
            'is_active' => 'boolean',
        ]);

        // Save logic will go here.
    }
};
?>

<div class="space-y-6">

    {{-- Header --}}
    <div>
        <flux:heading size="xl">
            Teacher Registration
        </flux:heading>

        <flux:text class="mt-1">
            Register a new teacher and employee information.
        </flux:text>
    </div>

    <flux:separator />

    {{-- Personal Information --}}
    <div class="space-y-4">

        <flux:heading size="lg">
            Personal Information
        </flux:heading>

        {{-- Row 1 --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

            <flux:input
                wire:model="first_name"
                label="First Name"
                placeholder="First name"
                required
            />

            <flux:input
                wire:model="middle_name"
                label="Middle Name"
                placeholder="Middle name"
            />

            <flux:input
                wire:model="last_name"
                label="Last Name"
                placeholder="Last name"
                required
            />

        </div>

        {{-- Row 2 --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

            <flux:input
                wire:model="suffix"
                label="Suffix"
                placeholder="Jr., Sr., III"
            />

            <flux:select
                wire:model="sex"
                label="Sex"
                placeholder="Select sex"
                required
            >
                <flux:select.option value="Male">
                    Male
                </flux:select.option>

                <flux:select.option value="Female">
                    Female
                </flux:select.option>
            </flux:select>

            <flux:input
                wire:model="birth_date"
                type="date"
                label="Birth Date"
                required
            />

        </div>

        {{-- Row 3 --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

            <flux:input
                wire:model="contact_number"
                label="Contact Number"
                placeholder="09XXXXXXXXX"
            />

            <flux:input
                wire:model="email"
                type="email"
                label="Email Address"
                placeholder="teacher@example.com"
                required
            />

            <flux:input
                wire:model="user_image"
                type="file"
                label="Profile Photo"
                accept="image/*"
            />

        </div>

        {{-- Address --}}
        <flux:textarea
            wire:model="address"
            label="Address"
            placeholder="Complete address"
            rows="3"
        />

    </div>

    <flux:separator />

    {{-- Employment Information --}}
    <div class="space-y-4">

        <flux:heading size="lg">
            Employment Information
        </flux:heading>

        {{-- Row 1 --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

            <flux:input
                wire:model="position"
                label="Position"
                placeholder="e.g. Teacher I"
                required
            />

            <flux:input
                wire:model="department"
                label="Department"
                placeholder="e.g. Mathematics Department"
                required
            />

            <flux:input
                wire:model="date_hired"
                type="date"
                label="Date Hired"
                required
            />

        </div>

        {{-- Row 2 --}}
        <div class="grid grid-cols-1 gap-4 md:grid-cols-3">

            <flux:select
                wire:model="employment_status"
                label="Employment Status"
                placeholder="Select employment status"
                required
            >
                <flux:select.option value="Permanent">
                    Permanent
                </flux:select.option>

                <flux:select.option value="Probationary">
                    Probationary
                </flux:select.option>

                <flux:select.option value="Contractual">
                    Contractual
                </flux:select.option>

                <flux:select.option value="Part-time">
                    Part-time
                </flux:select.option>
            </flux:select>

        </div>

        {{-- Active Status --}}
        <div class="flex items-center gap-3 pt-2">
            <flux:checkbox
                wire:model="is_active"
                label="Active Teacher"
            />
        </div>

    </div>

    <flux:separator />

    {{-- Actions --}}
    <div class="flex justify-end gap-2">

        <flux:button
            variant="ghost"
            href="{{ url()->previous() }}"
        >
            Cancel
        </flux:button>

        <flux:button
            variant="primary"
            wire:click="save"
            class="cursor-pointer"
        >
            Register Teacher
        </flux:button>

    </div>

</div>