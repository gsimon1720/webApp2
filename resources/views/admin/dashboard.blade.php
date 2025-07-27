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
                        <a href="#" class="text-sm text-indigo-400 hover:text-indigo-300">View All</a>
                    </div>
                    
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-dark-700">
                            <thead class="bg-dark-700">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Order ID</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Customer</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Date</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Amount</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Status</th>
                                    <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-300 uppercase tracking-wider">Action</th>
                                </tr>
                            </thead>
                            <tbody class="bg-dark-800 divide-y divide-dark-700">
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#ORD-0001</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">John Smith</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">2023-06-15</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">$125.00</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-900 text-green-300">Completed</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        <a href="#" class="text-indigo-400 hover:text-indigo-300">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#ORD-0002</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">Sarah Johnson</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">2023-06-14</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">$89.50</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-900 text-yellow-300">Processing</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        <a href="#" class="text-indigo-400 hover:text-indigo-300">View</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-white">#ORD-0003</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">Michael Brown</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">2023-06-13</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">$234.75</td>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-900 text-blue-300">Shipped</span>
                                    </td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-400">
                                        <a href="#" class="text-indigo-400 hover:text-indigo-300">View</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                
                <!-- Charts Section -->
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                    <!-- Sales Chart -->
                    <div class="bg-dark-800 rounded-lg shadow-lg p-6 border border-dark-700">
                        <h2 class="text-lg font-semibold text-white mb-4">Sales Overview</h2>
                        <div class="h-64 bg-dark-700 rounded-md flex items-center justify-center">
                            <p class="text-gray-500">Chart would be displayed here</p>
                        </div>
                    </div>
                    
                    <!-- User Activity -->
                    <div class="bg-dark-800 rounded-lg shadow-lg p-6 border border-dark-700">
                        <h2 class="text-lg font-semibold text-white mb-4">User Activity</h2>
                        <div class="h-64 bg-dark-700 rounded-md flex items-center justify-center">
                            <p class="text-gray-500">Chart would be displayed here</p>
                        </div>
                    </div>
                </div>
@endsection