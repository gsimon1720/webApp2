@extends('admin.layouts.master')
@section('content')
<div class="mb-6">
                    <p class="text-gray-400">Welcome back, Admin!</p>
                </div>
                
                <!-- Stats Cards -->
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
                    <!-- Total Users -->
                    <div class="bg-dark-800 rounded-lg shadow-lg p-6 border border-dark-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-400">Total Users</p>
                                <p class="text-2xl font-bold text-white mt-1">1,254</p>
                                <p class="text-xs text-green-400 mt-1"><i class="fas fa-arrow-up mr-1"></i>12% from last month</p>
                            </div>
                            <div class="p-3 rounded-full bg-dark-700 text-indigo-400">
                                <i class="fas fa-users text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Total Products -->
                    <div class="bg-dark-800 rounded-lg shadow-lg p-6 border border-dark-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-400">Total Products</p>
                                <p class="text-2xl font-bold text-white mt-1">568</p>
                                <p class="text-xs text-green-400 mt-1"><i class="fas fa-arrow-up mr-1"></i>5% from last month</p>
                            </div>
                            <div class="p-3 rounded-full bg-dark-700 text-blue-400">
                                <i class="fas fa-boxes text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Total Orders -->
                    <div class="bg-dark-800 rounded-lg shadow-lg p-6 border border-dark-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-400">Total Orders</p>
                                <p class="text-2xl font-bold text-white mt-1">3,215</p>
                                <p class="text-xs text-red-400 mt-1"><i class="fas fa-arrow-down mr-1"></i>2% from last month</p>
                            </div>
                            <div class="p-3 rounded-full bg-dark-700 text-green-400">
                                <i class="fas fa-shopping-cart text-xl"></i>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Revenue -->
                    <div class="bg-dark-800 rounded-lg shadow-lg p-6 border border-dark-700">
                        <div class="flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium text-gray-400">Revenue</p>
                                <p class="text-2xl font-bold text-white mt-1">$45,231</p>
                                <p class="text-xs text-green-400 mt-1"><i class="fas fa-arrow-up mr-1"></i>20% from last month</p>
                            </div>
                            <div class="p-3 rounded-full bg-dark-700 text-purple-400">
                                <i class="fas fa-dollar-sign text-xl"></i>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Recent Orders -->
                <div class="bg-dark-800 rounded-lg shadow-lg p-6 mb-6 border border-dark-700">
    <div class="flex items-center justify-between mb-4">
        <h2 class="text-lg font-semibold text-white">Recent Orders</h2>
        <a href="{{ route('admin.tickets.index') }}" class="text-sm text-indigo-400 hover:text-indigo-300">View All</a>
    </div>
    
    <div class="overflow-x-auto">
        <table class="min-w-full divide-y divide-dark-700">
            <thead class="bg-dark-700">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Order ID</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Customer</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Amount</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Action</th>
                </tr>
            </thead>
            <tbody class="bg-dark-800 divide-y divide-dark-700">
                @forelse($tickets as $ticket)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">
                            #{{ $ticket->ticket_code }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                            {{ $ticket->user->name ?? '—' }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                            {{ $ticket->created_at->format('Y-m-d') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                            ${{ number_format($ticket->price ?? 0, 2) }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            @if(strtolower($ticket->payment_status) === 'paid')
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-900 text-green-300">Completed</span>
                            @else
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-red-900 text-red-300">Unpaid</span>
                            @endif
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                            <a href="{{ route('admin.tickets.index', $ticket->id) }}" class="text-indigo-400 hover:text-indigo-300">View</a>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-400">
                            No recent orders found.
                        </td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

                
              
@endsection