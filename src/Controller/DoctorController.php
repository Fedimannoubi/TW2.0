<?php

namespace App\Controller;

use App\Entity\Doctor;
use App\Form\DoctorType;
use App\Repository\DoctorRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\SchedualServices;
use App\Entity\Schedule;
use App\Form\ScheduleType;
use App\Repository\ScheduleRepository;
use App\Repository\ClientRepository;
use \Datetime;
use \DateInterval;

/**
 * @Route("/doctorsList")
 */
class DoctorController extends AbstractController
{
    /**
     * @Route("/", name="doctor_index", methods={"GET"})
     */
    public function index(DoctorRepository $doctorRepository): Response
    {
        return $this->render('doctor/index.html.twig', [
            'doctors' => $doctorRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="doctor_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $doctor = new Doctor();
        $form = $this->createForm(DoctorType::class, $doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($doctor);
            $entityManager->flush();

            return $this->redirectToRoute('doctor_index');
        }

        return $this->render('doctor/new.html.twig', [
            'doctor' => $doctor,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="doctor_show", methods={"GET"})
     */
    public function show(Doctor $doctor,ScheduleRepository $scheduleRepository,ClientRepository $clientRepository ): Response
    {  

        $events = $scheduleRepository->findBy(["doctor"=>$doctor->getId()]);
        //dd($events);
        $rdvs =[];

        foreach ($events as $event) {
            $client = $clientRepository->findOneBy(["id"=>$event->getClient()->getId()]);
            $time = new DateTime($event->getappointment()->format('Y-m-d H:i:s'));
            $rdvs[] = [
                'id'=> $event->getID(),
                'appointment'=> $event->getappointment()->format('Y-m-d H:i:s'),
                'start' => $event->getappointment()->format('Y-m-d H:i:s'),
                'end'=> $time->add(new DateInterval('PT' . 30 . 'M'))->format('Y-m-d H:i:s'),
                'title' => $client->getFirstName().' '.$client->getLastName(),
                //'description'=>'',
                //'backgroundColor'=>'#0000ff',
                //'borderColor'=>'#0000ff',
                //'textColor'=>'#fffff',
                'allDay'=>false
            ];
        }

        $data= json_encode($rdvs);

     
        return $this->render('doctor/show.html.twig', [
            'doctor' => $doctor,
            'data' => $data
        ]);
        
    
        // ... further modify the response or return it directly
    
    }

    /**
     * @Route("/{id}/edit", name="doctor_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Doctor $doctor): Response
    {
        $form = $this->createForm(DoctorType::class, $doctor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('doctor_index');
        }

        return $this->render('doctor/edit.html.twig', [
            'doctor' => $doctor,
            'form' => $form->createView()
        ]);
    }

    /**
     * @Route("/{id}", name="doctor_delete", methods={"POST"})
     */
    public function delete(Request $request, Doctor $doctor): Response
    {
        if ($this->isCsrfTokenValid('delete'.$doctor->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($doctor);
            $entityManager->flush();
        }

        return $this->redirectToRoute('doctor_index');
    }
}
