<?php

namespace App\Http\Livewire\Customers\Pages;

use App\Models\ReservationList;
use Livewire\Component;
use Livewire\WithPagination;

class Reservations extends Component
{
    use WithPagination;
    protected $paginationTheme='bootstrap';

    public function render()
    {
        $values=ReservationList::leftJoin('booking_statuses as status','status.id','=','reservation_lists.status')->leftJoin('users as customer','customer.id','=','reservation_lists.userId')->leftJoin('users as barber','barber.id','=','reservation_lists.barberId')->select('reservation_lists.*','status.title as statusTitle','customer.firstName as customerName','customer.lastName as customerFamily','customer.phoneNumber as customerPhoneNumber','barber.firstName as barberName','barber.lastName as barberFamily')->where('reservation_lists.userId',auth()->user()->id)->orderBy('reservation_lists.id','desc')->paginate(10);
        return view('livewire.customers.pages.reservations',['values'=>$values]);
    }
}
