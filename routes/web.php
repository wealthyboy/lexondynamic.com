<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

$services = [
    'freight-transportation' => [
        'title' => 'Freight & Transportation',
        'image' => 'images/hero/freight-transportation.png',
        'description' => 'Secure local, cross-border, expedited, dedicated, heavy haul, and consolidated cargo movement.',
        'long_description' => 'Freight and transportation sit at the center of every dependable supply chain, and Lexon Dynamic Logistics provides the coordination needed to move cargo with clarity from pickup to destination. We support businesses moving local, regional, cross-border, expedited, dedicated, consolidated, and heavy haul freight by planning every movement around cargo type, weight, dimensions, route suitability, delivery windows, equipment requirements, safety exposure, and operational urgency. Whether the shipment involves commercial goods, industrial materials, project cargo, manufacturing supplies, retail inventory, oil and gas materials, construction inputs, or specialized freight, our team works to keep the movement organized, traceable, and aligned with the client’s business schedule. We help clients choose the right transportation option, prepare the right handling plan, manage dispatch expectations, coordinate pickup and delivery points, monitor movement progress, and keep communication clear throughout the journey. For complex freight, we also consider access restrictions, loading conditions, delivery site readiness, documentation needs, and contingency options so cargo is not simply moved, but managed with practical oversight. The goal is to reduce delays, protect cargo, support business continuity, and give every client a freight solution that is safe, dependable, cost-conscious, and built around real operational needs.',
        'points' => ['Full Truckload and LTL services', 'Cross-border freight transportation', 'Heavy haul and specialized transport'],
    ],
    'container-shipping' => [
        'title' => 'Container Shipping',
        'image' => 'images/hero/container-shipping.png',
        'description' => 'Import and export container shipping coordination for commercial and industrial clients.',
        'long_description' => 'Container shipping requires careful coordination between cargo readiness, container type, port schedules, documentation, inland transport, customs requirements, and final delivery expectations. Lexon Dynamic Logistics supports importers, exporters, manufacturers, traders, distributors, project operators, and industrial clients moving 20ft and 40ft containers across domestic and international trade routes. We help clients organize port-to-port, port-to-door, door-to-port, and related container movements while paying attention to loading plans, container availability, drayage requirements, seal control, customs documentation, shipment timing, cargo security, terminal procedures, and destination coordination. From general commercial goods to industrial materials, spare parts, raw materials, finished products, and project cargo, we work to make the container shipping process easier to understand, easier to manage, and easier to track. Our team helps clients prepare ahead for the common pressure points in container logistics, including documentation delays, demurrage risk, port congestion, inland haulage timing, and handover requirements. By connecting shipping, port handling, transport, and documentation into one clearer workflow, Lexon Dynamic Logistics gives clients stronger operational control and a container shipping process that supports reliable import and export activity.',
        'points' => ['20ft and 40ft container shipping', 'Port-to-port coordination', 'Customs clearing documentation support'],
    ],
    'vehicle-transportation' => [
        'title' => 'Vehicle Transportation',
        'image' => 'images/hero/vehicle-transportation.png',
        'description' => 'Professional vehicle logistics for individuals, dealerships, fleets, and industrial clients.',
        'long_description' => 'Vehicle transportation needs a logistics process that protects the asset while keeping movement efficient, properly inspected, and well documented. Lexon Dynamic Logistics supports individuals, dealerships, importers, exporters, fleet operators, corporate clients, relocation needs, auction purchases, and industrial businesses with vehicle movement across local, cross-border, and international routes. We coordinate cars, SUVs, pickups, commercial trucks, luxury vehicles, specialty vehicles, and multi-unit fleet movements using suitable options such as carrier transport, RoRo shipping, and containerized vehicle shipping when required. Before movement begins, our team considers vehicle condition, loading method, ground clearance, inspection needs, pickup access, destination access, insurance expectations, route suitability, transit timing, and documentation requirements. For commercial clients, we also help organize multiple-unit delivery schedules, fleet staging, dealership arrivals, and destination handovers so vehicles reach the right place in a controlled and presentable condition. By focusing on careful handling, clear coordination, practical transport planning, and consistent communication, we help clients move vehicles with confidence whether the requirement is a single personal vehicle, a dealership shipment, imported vehicles, or a larger commercial fleet.',
        'points' => ['Cars, SUVs, pickups, and trucks', 'RoRo and containerized vehicle shipping', 'Luxury, exotic, and fleet movement'],
    ],
    'construction-equipment' => [
        'title' => 'Construction Equipment',
        'image' => 'images/hero/heavy-equipment.png',
        'description' => 'Specialized handling, loading, transportation, and delivery for heavy-duty equipment.',
        'long_description' => 'Construction equipment logistics requires planning that goes beyond normal freight movement because the cargo is often oversized, heavy, high-value, and directly tied to project timelines. Lexon Dynamic Logistics supports clients moving excavators, bulldozers, forklifts, loaders, backhoes, cranes, generators, compressors, structural components, plant machinery, and other project equipment for construction, energy, manufacturing, marine, infrastructure, and industrial operations. We coordinate equipment dimensions, weight, loading points, route restrictions, permit considerations, trailer suitability, lifting requirements, securing methods, safety procedures, and final delivery access before the movement is allowed to begin. Where job sites are active or remote, we also consider terrain, unloading space, site readiness, crane or forklift support, delivery sequencing, and the practical realities of receiving heavy equipment without slowing down operations. Every movement is approached with attention to risk reduction, asset protection, and practical execution, because delays or mishandling can affect an entire project schedule. Our role is to help clients move demanding equipment with the right preparation, the right handling plan, and the right logistics oversight from origin to final site.',
        'points' => ['Excavators, bulldozers, and cranes', 'Forklifts, loaders, and backhoes', 'Structural and project equipment'],
    ],
    'marine-equipment-logistics' => [
        'title' => 'Marine Equipment Logistics',
        'image' => 'images/hero/bonus-img3.jpg',
        'description' => 'Marine and offshore logistics support for equipment, spare parts, and operational materials.',
        'long_description' => 'Marine equipment logistics supports operations where timing, safety, access, and documentation are critical to keeping vessels, offshore projects, port activities, and marine supply chains moving. Lexon Dynamic Logistics coordinates the movement of vessel spare parts, marine engines, offshore equipment, port materials, ship supplies, industrial components, deck equipment, operational cargo, and urgent replacement parts needed by marine and offshore clients. These shipments often require careful handling, clear delivery windows, port access coordination, customs support, terminal instructions, and documentation that aligns with vessel schedules or project timelines. Our team helps organize movement between warehouses, suppliers, ports, terminals, vessels, marine yards, and offshore support points while keeping attention on cargo sensitivity, loading method, lifting requirements, packaging condition, and safe transfer. In marine operations, a delayed part or poorly planned delivery can affect sailing schedules, repair work, offshore activity, or port productivity, so we treat communication and coordination as part of the service itself. Whether the requirement is urgent spare parts, scheduled vessel support, or planned marine project cargo, Lexon Dynamic Logistics helps clients reduce downtime and maintain reliable operational flow.',
        'points' => ['Offshore cargo coordination', 'Vessel spare parts logistics', 'Port logistics support'],
    ],
    'warehousing-supply-chain' => [
        'title' => 'Warehousing & Supply Chain',
        'image' => 'images/hero/supply-chain-warehouse.png',
        'description' => 'Inventory, cargo distribution, tracking, and end-to-end supply chain coordination.',
        'long_description' => 'Warehousing and supply chain coordination help businesses keep cargo organized before, during, and after transportation, especially when goods pass through several suppliers, carriers, ports, storage points, and delivery destinations. Lexon Dynamic Logistics supports clients that need storage planning, inventory organization, cargo consolidation, distribution coordination, shipment monitoring, dispatch scheduling, and end-to-end logistics planning across multiple touchpoints. We work with businesses moving commercial goods, industrial supplies, imported cargo, project materials, spare parts, retail inventory, manufacturing inputs, and recurring stock that must be received, stored, tracked, protected, and dispatched efficiently. Our approach helps clients connect transportation, warehousing, documentation, and distribution into one clearer workflow so every movement has better visibility and fewer loose ends. For growing businesses and industrial operations, we also help simplify recurring delivery patterns, stock movement, supplier coordination, and shipment status updates. By focusing on organization, timing, communication, and practical control, Lexon Dynamic Logistics helps reduce confusion between suppliers, carriers, warehouses, ports, and final delivery points so goods move through the supply chain with better consistency and fewer avoidable delays.',
        'points' => ['Warehousing and storage support', 'Shipment tracking and monitoring', 'Logistics planning and distribution'],
    ],
];

foreach ($services as &$service) {
    $service['paragraphs'] = preg_split(
        '/(?<=\.)\s+(?=(We|Whether|For|The goal|From|Our team|By|Before|Every|Where|In marine|Our role)\b)/',
        $service['long_description'],
        -1,
        PREG_SPLIT_NO_EMPTY
    );
}
unset($service);

$consultingServices = [
    [
        'title' => 'Procurement & Strategic Sourcing',
        'image' => 'images/hero/oil-gas-consulting.png',
        'description' => 'Specialized sourcing for industrial equipment, technical components, materials, and project requirements across oil & gas, marine, manufacturing, telecommunications, construction, and energy operations.',
        'points' => ['Oil & gas equipment and accessories', 'Industrial machinery and spare parts', 'OEM sourcing and supplier coordination', 'Valves, pumps, pipes, fittings, safety materials, and technical consumables'],
    ],
    [
        'title' => 'EPC Services',
        'image' => 'images/hero/heavy-equipment.png',
        'description' => 'Engineering, Procurement & Construction support services planned around quality, safety, technical execution, vendor coordination, equipment supply, installation support, and project delivery needs.',
        'points' => ['Project planning and execution support', 'Technical procurement management', 'Equipment supply and installation coordination', 'Maintenance support services'],
    ],
    [
        'title' => 'Logistics & Supply Chain Management',
        'image' => 'images/hero/container-shipping.png',
        'description' => 'Shipment and supply chain processes that help clients move goods across global markets with clear documentation, timely delivery, safer cargo handling, and practical end-to-end coordination.',
        'points' => ['International freight forwarding', 'Import and export management', 'Customs clearing and documentation', 'Warehousing and inventory support'],
    ],
    [
        'title' => 'Industrial Products Supply',
        'image' => 'images/hero/supply-chain-warehouse.png',
        'description' => 'Reliable supply of industrial and technical products for oil & gas, marine, manufacturing, construction, power generation, energy, communication, and field operations.',
        'points' => ['Pipes, fittings, valves, flanges, pumps, and compressors', 'Power generation and energy equipment', 'Mechanical tools, electrical materials, and automation systems', 'Construction materials and lifting equipment'],
    ],
    [
        'title' => 'Marine & Offshore Supply',
        'image' => 'images/hero/bonus-img3.jpg',
        'description' => 'Marine and offshore procurement support covering vessel materials, marine equipment, safety products, spare parts, deck machinery, navigation systems, and offshore project requirements.',
        'points' => ['Marine engines and spare parts', 'Deck machinery and navigation systems', 'Marine safety equipment', 'Offshore tools and operational accessories'],
    ],
    [
        'title' => 'Technical Partnerships & Project Support',
        'image' => 'images/hero/about-oil-gas-worker.png',
        'description' => 'Technical collaboration, OEM relationships, vendor management, project logistics, and industrial support services that help clients solve complex sourcing and execution requirements.',
        'points' => ['Strategic OEM partnerships', 'Vendor management and technical collaborations', 'Project logistics and operational support', 'Cost-conscious project delivery support'],
    ],
];

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/consulting', function () {
    return view('consulting');
})->name('consulting');

Route::get('/consulting/about', function () {
    return view('consulting-about');
})->name('consulting.about');

Route::get('/consulting/services', function () use ($consultingServices) {
    return view('consulting-services', ['consultingServices' => $consultingServices]);
})->name('consulting.services');

Route::get('/logistics', function () {
    return view('logistics');
})->name('logistics');

Route::get('/services', function () use ($services) {
    return view('services', ['services' => $services]);
})->name('services');

Route::get('/services/{service}', function (string $service) use ($services) {
    abort_unless(isset($services[$service]), 404);

    return view('service-show', [
        'service' => $services[$service],
        'services' => $services,
        'slug' => $service,
    ]);
})->name('services.show');

Route::get('/regions', function () {
    return view('regions');
})->name('regions');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::prefix('admin')
    ->name('admin.')
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
        Route::resource('users', UserController::class)->only(['index']);
        Route::resource('pages', PageController::class)->only(['index']);
        Route::resource('sliders', SliderController::class)->only(['index']);
    });
