<?php

namespace App\Http\Controller;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    private $EmployeeID = [
        1 => [
            'EmployeeNumber' => '1',
            'FirstName' => 'Andrea',
            'LastName' => 'Ballad',
            'Birthday' => 'December 20, 2000',
            'Gender' => 'Female'
        ],

        2 => [
            'EmployeeNumber' => '2',
            'FirstName' => 'Angela',
            'LastName' => 'Nicole',
            'Birthday' => 'January 21, 2001',
            'Gender' => 'Female'         
        ],

        3 => [
            'EmployeeNumber' => '3',
            'FirstName' => 'Patricia',
            'LastName' => 'dela Cruz',
            'Birthday' => 'July 31, 2001',
            'Gender' => 'Female'
        ],

        4 => [
            'EmployeeNumber' => '4',
            'FirstName' => 'Dianne',
            'LastName' => 'Eje',
            'Birthday' => 'January 20, 2001',
            'Gender' => 'Female'
        ],

        5 => [
            'EmployeeNumber' => '5',
            'FirstName' => 'Mikaela',
            'LastName' => 'Gilbuena',
            'Birthday' => 'November 4, 1999',
            'Gender' => 'Female'
        ],

        6 => [
            'EmployeeNumber' => '6',
            'FirstName' => 'Ernesto',
            'LastName' => 'Cunanan',
            'Birthday' => 'April 5, 2001',
            'Gender' => 'Male'
        ]
    ];

    public function index()
    {
        return view('Employee.index', ['EmployeeID' => $this -> EmployeeID]);
    }

    public function show($id)
    {
        abort_if(!(isset($this -> EmployeeID)), 404);
        return view('Employee.show', ['Employee' => $this -> EmployeeID($id)]);
    }

    public function create()
    {
        return view('Employee.create');
    }

    public function store(Request $request)
    {
        $EmployeeNumber = Request() -> input('EmployeeNumber');
        $FirstName = Request() -> input('FirstName');
        $LastName = Request() -> input('LastName');
        $Birthday = Request() -> input('Birthday');
        $Gender  = Request() -> input('Gender');
        $EmpID = [
            'EmployeeNumber' => $EmployeeNumber,
            'FirstName' => $FirstName,
            'LastName' => $LastName,
            'Birthday' => $Birthday,
            'Gender' => $Gender
        ];
    }

    public function destroy($id)
    {
        $this -> EmployeeID[$id] -> delete();
        return view('Employee.store', ['Employee' => $this -> EmployeeID]);
    }

    public function birthday($mm, $dd, $yyyy)
    {
        $date = date('M/D/Y', mktime(0,0,0, $mm,$dd,$yyyy));
        return view('Employee.birthday', ['Employee' => $this -> EmployeeID], ['date' => $date]);
    }
}