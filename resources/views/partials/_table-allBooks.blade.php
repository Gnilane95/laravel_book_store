@php
  $index = 1
@endphp
<div class="overflow-x-auto my-20 container shadow-lg p-3">
  <table class="table w-full">
    <!-- head -->
    <thead>
      <tr>
        <th></th>
        <th>Nom du livre</th>
        <th>Prix</th>
        <th>Auteur</th>
        <th>Editer</th>
      </tr>
    </thead>
    <tbody>
      <!-- row 1 -->
      @forelse ($books as $book)
        <tr>
          <th>{{ $index++ }}</th>
          <th>{{ $book->title }}</th>
          <td>{{ $book->price }}</td>
          <td>{{ $book->author }}</td>
          <td>
            <a href="books/{{ $book->id  }}" class="btn btn-primary">Voir</a>
          </td>
        </tr>
      @empty
        
      @endforelse
    </tbody>
  </table>
</div>