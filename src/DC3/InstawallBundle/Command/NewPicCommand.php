<?php

namespace DC3\InstawallBundle\Command;



use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use DC3\InstawallBundle\Entity\Pic;
use DC3\InstawallBundle\Entity\Queue;

class NewPicCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('instagram:pic')
            ->setDescription('Recuperer une nouvelle photo');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
         $em = $this->getContainer()->get('doctrine')->getManager();
         $logger = $this->getContainer()->get('logger');
         
         $events = $em->getRepository("DC3InstawallBundle:Event")
            ->createQueryBuilder("e")
            ->getQuery()
            ->getResult();
            

            
         foreach ($events as $event) {
	        $eventid = $event->getId();
	        $tag = $event->getHTag();
	        $lng = $event->getLng();
	        $lat = $event->getLat();
	         
	         
	        $Insta = new \Instagram(array(
				'apiKey'=>'087c4dedc9e942179d973ba767648488',
				'apiSecret'=>'f83ef66f9cd3494db572c70705a341c7',
				'apiCallback'=>'http://intagram.nicolasa.dc3'
			));
			
			$pics_location = $Insta->searchMedia($lat, $lng, 500);
			foreach ($pics_location->data as $pic) {
				
				$like_count = $pic->likes->count;
				$url = $pic->images->low_resolution->url; // qualité de l'image
				$comment = '';
				if(isset($pic->caption->text) && !empty($pic->caption->text)){
					$comment = $pic->caption->text;
				}
				$user_name = $pic->user->username;
				$user_pic = $pic->user->profile_picture;
				$picture_id = $pic->id;
				$created_time = new \Datetime(); // Attention format timestamp
				$created_time->setTimestamp($pic->created_time); 
				
				$picObject = $em->getRepository("DC3InstawallBundle:Pic")
				->createQueryBuilder("p")
				->where('p.pictureId = :picture_id')
				->setParameter('picture_id',$picture_id)
				->getQuery()
				->getResult();
				
				if (!$picObject) {
					$logger->info('nouvelle pic dans '.$event->getId());
					$instpic = new Pic();
					$instpic->setUrl($url);
					$instpic->setLikeCount($like_count);
					$instpic->setComment($comment);
					$instpic->setUserName($user_name);
					$instpic->setUserPic($user_pic);
					$instpic->setCreated($created_time);
					$instpic->setPictureId($picture_id);
					$instpic->setEvent($event);
					$em->persist($instpic);	
				}
				
			}

			$pics_tag = $Insta->searchMediaByTag($tag);

			foreach ($pics_tag->data as $pic) {
				$like_count = $pic->likes->count;
				$url = $pic->images->low_resolution->url;
				$comment = '';
				if(isset($pic->caption->text) && !empty($pic->caption->text)){
					$comment = $pic->caption->text;
				}
				$user_name = $pic->user->username;
				$user_pic = $pic->user->profile_picture;
				$picture_id = $pic->id;
				$created_time = new \Datetime(); // Attention format timestamp
				$created_time->setTimestamp($pic->created_time); 
											
				$picObject = $em->getRepository("DC3InstawallBundle:Pic")
				->createQueryBuilder("p")
				->where('p.pictureId = :picture_id')
				->setParameter('picture_id',$picture_id)
				->getQuery()
				->getResult();
				
				if (!$picObject) {
					$logger->info('nouvelle pic dans '.$event->getId());
					$instpic = new Pic();
					$instpic->setUrl($url);
					$instpic->setLikeCount($like_count);
					$instpic->setComment($comment);
					$instpic->setUserName($user_name);
					$instpic->setUserPic($user_pic);
					$instpic->setCreated($created_time);
					$instpic->setPictureId($picture_id);
					$instpic->setEvent($event);
					$em->persist($instpic);	
				};
			}
			//$Queue = new Queue();

			//$lastPic = $Queue->getLast();

			//echo json_encode($lastPic);
	         
	         
         }
         
	$em->flush();			
         
         
    }
}