<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ReviewController extends Controller
{
    public function index() {
        $reviews = Review::all();
        return view('reviews.index', compact('reviews'));
    }

    public function create() {
        return view('reviews.create');
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        Review::create($validated);
        return redirect()->route('reviews.index')->with('success', 'Review added successfully!');
    }

    public function edit(Review $review) {
        return view('reviews.edit', compact('review'));
    }

    public function update(Request $request, Review $review) {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'occupation' => 'required|string|max:255',
            'message' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);
        $review->update($validated);
        return redirect()->route('reviews.index')->with('success', 'Review updated successfully!');
    }

    public function destroy(Review $review) {
        $review->delete();
        return redirect()->route('reviews.index')->with('success', 'Review deleted successfully!');
    }
}
