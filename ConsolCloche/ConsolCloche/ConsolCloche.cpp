// ConsolCloche.cpp : Ce fichier contient la fonction 'main'. L'exécution du programme commence et se termine à cet endroit.
//

#include <iostream>
#include "TCPclient.h"
#include "TCPserver.h"
void ParseTest(char * buffer, int length, TCPclient *TCPc) {

	char trame1Up[12];
	trame1Up[0] = 0x00;
	trame1Up[1] = 0x00;
	trame1Up[2] = 0x00;
	trame1Up[3] = 0x00;
	trame1Up[4] = 0x00;
	trame1Up[5] = 0x06;
	trame1Up[6] = 0x02;
	trame1Up[7] = 0x06;
	trame1Up[8] = 0x00;
	trame1Up[9] = 0x02;
	trame1Up[10] = 0x00;
	trame1Up[11] = 0x01;

	char trame1Down[12];
	trame1Down[0] = 0x00;
	trame1Down[1] = 0x00;
	trame1Down[2] = 0x00;
	trame1Down[3] = 0x00;
	trame1Down[4] = 0x00;
	trame1Down[5] = 0x06;
	trame1Down[6] = 0x02;
	trame1Down[7] = 0x06;
	trame1Down[8] = 0x00;
	trame1Down[9] = 0x02;
	trame1Down[10] = 0x00;
	trame1Down[11] = 0x00;

	char trame2Up[12];
	trame2Up[0] = 0x00;
	trame2Up[1] = 0x00;
	trame2Up[2] = 0x00;
	trame2Up[3] = 0x00;
	trame2Up[4] = 0x00;
	trame2Up[5] = 0x06;
	trame2Up[6] = 0x02;
	trame2Up[7] = 0x06;
	trame2Up[8] = 0x00;
	trame2Up[9] = 0x02;
	trame2Up[10] = 0x00;
	trame2Up[11] = 0x02;

	char trame2Down[12];
	trame2Down[0] = 0x00;
	trame2Down[1] = 0x00;
	trame2Down[2] = 0x00;
	trame2Down[3] = 0x00;
	trame2Down[4] = 0x00;
	trame2Down[5] = 0x06;
	trame2Down[6] = 0x02;
	trame2Down[7] = 0x06;
	trame2Down[8] = 0x00;
	trame2Down[9] = 0x02;
	trame2Down[10] = 0x00;
	trame2Down[11] = 0x00;

	char trame3Up[12];
	trame3Up[0] = 0x00;
	trame3Up[1] = 0x00;
	trame3Up[2] = 0x00;
	trame3Up[3] = 0x00;
	trame3Up[4] = 0x00;
	trame3Up[5] = 0x06;
	trame3Up[6] = 0x02;
	trame3Up[7] = 0x06;
	trame3Up[8] = 0x00;
	trame3Up[9] = 0x02;
	trame3Up[10] = 0x00;
	trame3Up[11] = 0x04;

	char trame3Down[12];
	trame3Down[0] = 0x00;
	trame3Down[1] = 0x00;
	trame3Down[2] = 0x00;
	trame3Down[3] = 0x00;
	trame3Down[4] = 0x00;
	trame3Down[5] = 0x06;
	trame3Down[6] = 0x02;
	trame3Down[7] = 0x06;
	trame3Down[8] = 0x00;
	trame3Down[9] = 0x02;
	trame3Down[10] = 0x00;
	trame3Down[11] = 0x00;

	char trame4Up[12];
	trame4Up[0] = 0x00;
	trame4Up[1] = 0x00;
	trame4Up[2] = 0x00;
	trame4Up[3] = 0x00;
	trame4Up[4] = 0x00;
	trame4Up[5] = 0x06;
	trame4Up[6] = 0x02;
	trame4Up[7] = 0x06;
	trame4Up[8] = 0x00;
	trame4Up[9] = 0x02;
	trame4Up[10] = 0x00;
	trame4Up[11] = 0x08;

	char trame4Down[12];
	trame4Down[0] = 0x00;
	trame4Down[1] = 0x00;
	trame4Down[2] = 0x00;
	trame4Down[3] = 0x00;
	trame4Down[4] = 0x00;
	trame4Down[5] = 0x06;
	trame4Down[6] = 0x02;
	trame4Down[7] = 0x06;
	trame4Down[8] = 0x00;
	trame4Down[9] = 0x02;
	trame4Down[10] = 0x00;
	trame4Down[11] = 0x00;

	if (buffer[0] == 'C' && buffer[1] == 'H')
	{
		if (buffer[2] == '0' && buffer[3] == '1') {
			// Envoi de la trame pour monter le marteau
			TCPc->TCPsend(trame1Up, 12);
			std::cout << "ok1" << std::endl;
			//Mettre un délai de 250 ms.
			Sleep(250);

			// Envoi de la trame pour descendre le marteau
			TCPc->TCPsend(trame1Down, 12);
			std::cout << "ok2" << std::endl;
		}
		if (buffer[2] == '0' && buffer[3] == '2') {
			// Envoi de la trame pour monter le marteau
			TCPc->TCPsend(trame2Up, 12);

			//Mettre un délai de 250 ms.
			Sleep(250);

			// Envoi de la trame pour descendre le marteau
			TCPc->TCPsend(trame2Down, 12);
		}
		if (buffer[2] == '0' && buffer[3] == '3') {
			// Envoi de la trame pour monter le marteau
			TCPc->TCPsend(trame3Up, 12);

			//Mettre un délai de 250 ms.
			Sleep(250);

			// Envoi de la trame pour descendre le marteau
			TCPc->TCPsend(trame3Down, 12);
		}
		if (buffer[2] == '0' && buffer[3] == '4') {
			// Envoi de la trame pour monter le marteau
			TCPc->TCPsend(trame4Up, 12);

			//Mettre un délai de 250 ms.
			Sleep(250);

			// Envoi de la trame pour descendre le marteau
			TCPc->TCPsend(trame4Down, 12);
		}
	}
	else {
		Sleep(atoi(buffer));
	}
}

int main()
{
	TCPserver *TCPs = new TCPserver();
	TCPclient *TCPc = new TCPclient(); 
	bool TCPser = TCPs->TCPconnexion(203);
	char buf[60] = {0};
	bool TCPclie = TCPc->TCPconnexion("192.168.64.124", 502);
	do
	{
		TCPser = TCPs->TCPWaitConnexion();
		if (TCPser == true) {
			int i;
			do
			{
				
			if (TCPclie == true) {
				if (TCPs->TCPrecv(buf, 4)) {
					std::cout << buf << std::endl;
					ParseTest(buf, strlen(buf), TCPc);
					i = 1;
				}
				else {
					i = 0;
				}
			}
			else {
				std::cout << "Client Non conneter reconnexion en cours !" << std::endl;
				TCPclie = TCPc->TCPconnexion("192.168.64.124", 502);
				i = 1;
			}

			} while (i != 0);
			
		}


	} while (TCPser == true);
}

// Exécuter le programme : Ctrl+F5 ou menu Déboguer > Exécuter sans débogage
// Déboguer le programme : F5 ou menu Déboguer > Démarrer le débogage

// Astuces pour bien démarrer : 
//   1. Utilisez la fenêtre Explorateur de solutions pour ajouter des fichiers et les gérer.
//   2. Utilisez la fenêtre Team Explorer pour vous connecter au contrôle de code source.
//   3. Utilisez la fenêtre Sortie pour voir la sortie de la génération et d'autres messages.
//   4. Utilisez la fenêtre Liste d'erreurs pour voir les erreurs.
//   5. Accédez à Projet > Ajouter un nouvel élément pour créer des fichiers de code, ou à Projet > Ajouter un élément existant pour ajouter des fichiers de code existants au projet.
//   6. Pour rouvrir ce projet plus tard, accédez à Fichier > Ouvrir > Projet et sélectionnez le fichier .sln.
