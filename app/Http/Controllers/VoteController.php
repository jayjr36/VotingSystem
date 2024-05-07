<?php

namespace App\Http\Controllers;

use App\Models\Vote;
use App\Models\Voter;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    public function receiveVote(Request $request)
    {
        $validatedData = $request->validate([
            'voterid' => 'required',
            'president' => 'nullable',
            'mp' => 'nullable',
            'councilor' => 'nullable',
        ]);
    
        $voterId = $validatedData['voterid'];
        $president = $validatedData['president'] ?? 0;
        $mp = $validatedData['mp'] ?? 0;
        $councilor = $validatedData['councilor'] ?? 0;
    
        $voter = Voter::where('fingerprint_id', $voterId)->first();
        if (!$voter) {
            return response()->json(['error' => 'User not registered'], 400);
        }
    
        $vote = new Vote();
        $vote->voter_id = $voterId;
        $vote->president = $president;
        $vote->mp = $mp;
        $vote->councilor = $councilor;
        $vote->save();
    
        return response()->json(['message' => 'Vote received and saved successfully']);
    }
     
    public function getVotes()
{
    $votes = Vote::all(); 
    return view('votespage')->with('votes', $votes);
}

    public function index()
    {
        $votes = Vote::all(); 

        $presidentContestants = [
            [
                'name' => 'President1',
                'image' => 'img.jpg',
                'votes' => 100,
            ],
            [
                'name' => 'President2',
                'image' => 'img2.jpg',
                'votes' => 150,
            ],
            [
                'name' => 'President3',
                'image' => 'img3.jpg',
                'votes' => 200,
            ],
        ];

        $mpContestants = [

            [
                'name' => 'MP1',
                'image' => 'img4.jpg',
                'votes' => 100,
            ],
            [
                'name' => 'MP2',
                'image' => 'img5.jpg',
                'votes' => 150,
            ],
            [
                'name' => 'MP3',
                'image' => 'img6.jpg',
                'votes' => 200,
            ],
        ];

        $councilorContestants = [
            [
                'name' => 'Councilor1',
                'image' => 'img7.jpg',
                'votes' => 100,
            ],
            [
                'name' => 'Councilor2',
                'image' => 'img8.jpg',
                'votes' => 150,
            ],
            [
                'name' => 'Councilor3',
                'image' => 'img9.jpg',
                'votes' => 200,
            ],
        ];

        return view('votespage', compact('presidentContestants', 'mpContestants', 'councilorContestants', ));
    }
}


