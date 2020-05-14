namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Ticket;

class ReplyController extends Controller
{
public function __construct()
{
$this->middleware ('auth:web,admin');
}

public function create(Ticket $ticket,Request $request){

//dd($ticket);

$reply= Auth::user()->replies()->create([


'text'=>$request->text,

'ticket_id'=>$ticket->id


]);

event(new ReplyCreated($reply,Auth::user()));

return back();
}



}